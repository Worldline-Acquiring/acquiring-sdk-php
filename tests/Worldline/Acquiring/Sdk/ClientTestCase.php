<?php

namespace Worldline\Acquiring\Sdk;

use DateTime;
use Worldline\Acquiring\Sdk\Authentication\OAuth2Authenticator;
use Worldline\Acquiring\Sdk\V1\Domain\AmountData;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentResource;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentResponse;
use Worldline\Acquiring\Sdk\V1\Domain\CardDataForDcc;
use Worldline\Acquiring\Sdk\V1\Domain\CardPaymentData;
use Worldline\Acquiring\Sdk\V1\Domain\ECommerceData;
use Worldline\Acquiring\Sdk\V1\Domain\GetDCCRateRequest;
use Worldline\Acquiring\Sdk\V1\Domain\GetDccRateResponse;
use Worldline\Acquiring\Sdk\V1\Domain\PaymentReferences;
use Worldline\Acquiring\Sdk\V1\Domain\PlainCardData;
use Worldline\Acquiring\Sdk\V1\Domain\PointOfSaleDataForDcc;
use Worldline\Acquiring\Sdk\V1\Domain\TransactionDataForDcc;

class ClientTestCase extends TestCase
{
    /**
     * @var Client|null
     */
    protected $client = null;

    /**
     * @var Client|null
     */
    protected $proxyClient = null;

    /**
     * @return Client
     */
    protected function getClient()
    {
        if (is_null($this->client)) {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $authenticator = new OAuth2Authenticator($communicatorConfiguration, $this->getOAuth2TokenUri());
            $communicator = new Communicator($communicatorConfiguration, $authenticator);
            $this->client = new Client($communicator);
        }
        return $this->client;
    }

    /**
     * @return Client
     */
    protected function getProxyClient()
    {
        $proxyHost = $this->getProxyHost();
        if (!$proxyHost) {
            $this->markTestSkipped("Proxy host not set");
        }

        if (is_null($this->proxyClient)) {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setProxyConfiguration(new ProxyConfiguration(
                $this->getProxyHost(),
                $this->getProxyPort(),
                $this->getProxyUsername(),
                $this->getProxyPassword()
            ));
            $authenticator = new OAuth2Authenticator($communicatorConfiguration, $this->getOAuth2TokenUri());
            $communicator = new Communicator($communicatorConfiguration, $authenticator);
            $this->proxyClient = new Client($communicator);
        }
        return $this->proxyClient;
    }

    /**
     * @return ApiPaymentRequest
     */
    protected function getApiPaymentRequest(): ApiPaymentRequest
    {
        $request = new ApiPaymentRequest();
        $request->amount = new AmountData();
        $request->amount->amount = 200;
        $request->amount->currencyCode = "GBP";
        $request->amount->numberOfDecimals = 2;
        $request->authorizationType = "PRE_AUTHORIZATION";
        $request->transactionTimestamp = new DateTime();
        $request->cardPaymentData = new CardPaymentData();
        $request->cardPaymentData->cardEntryMode = "ECOMMERCE";
        $request->cardPaymentData->allowPartialApproval = false;
        $request->cardPaymentData->brand = "VISA";
        $request->cardPaymentData->captureImmediately = false;
        $request->cardPaymentData->cardholderVerificationMethod = "CARD_SECURITY_CODE";
        $request->cardPaymentData->cardData = new PlainCardData();
        $request->cardPaymentData->cardData->expiryDate = "122031";
        $request->cardPaymentData->cardData->cardNumber = "4176669999000104";
        $request->cardPaymentData->cardData->cardSecurityCode = "012";
        $request->references = new PaymentReferences();
        $request->references->merchantReference = "your-order-" . $this->uuid();
        $request->operationId = $this->uuid();

        return $request;
    }

    protected function assertPaymentResponse(ApiPaymentRequest $request, ApiPaymentResponse $response)
    {
        $this->assertEquals($request->operationId, $response->operationId);
        $this->assertEquals("0", $response->responseCode);
        $this->assertEquals("APPROVED", $response->responseCodeCategory);
        $this->assertNotNull($response->responseCodeDescription);
        $this->assertEquals("AUTHORIZED", $response->status);
        $this->assertNotNull($response->initialAuthorizationCode);
        $this->assertNotNull($response->paymentId);
        $this->assertNotNull($response->totalAuthorizedAmount);
        $this->assertEquals(200, $response->totalAuthorizedAmount->amount);
        $this->assertEquals("GBP", $response->totalAuthorizedAmount->currencyCode);
        $this->assertEquals(2, $response->totalAuthorizedAmount->numberOfDecimals);
    }

    protected function assertPaymentStatusResponse($paymentId, ApiPaymentResource $response) {
        $this->assertNotNull($response->initialAuthorizationCode);
        $this->assertEquals($paymentId, $response->paymentId);
        $this->assertEquals("AUTHORIZED", $response->status);
    }

    /**
     * @param int $amount
     * @return GetDCCRateRequest
     */
    protected function getGetDCCRateRequest($amount = 200)
    {
        $request = new GetDCCRateRequest();
        $request->operationId = $this->uuid();
        $request->targetCurrency = "EUR";
        $request->cardPaymentData = new CardDataForDcc();
        $request->cardPaymentData->bin = "41766699";
        $request->cardPaymentData->brand = "VISA";
        $request->pointOfSaleData = new PointOfSaleDataForDcc();
        $request->pointOfSaleData->terminalId = "12345678";
        $request->transaction = new TransactionDataForDcc();
        $request->transaction->amount = new AmountData();
        $request->transaction->amount->amount = $amount;
        $request->transaction->amount->currencyCode = "GBP";
        $request->transaction->amount->numberOfDecimals = 2;
        $request->transaction->transactionType = "PAYMENT";
        $request->transaction->transactionTimestamp = new DateTime();

        return $request;
    }

    protected function assertDccRateResponse(GetDCCRateRequest $body, GetDccRateResponse $response)
    {
        $this->assertNotNull($response->proposal);
        $this->assertNotNull($response->proposal->originalAmount);
        $this->assertEqualAmounts($body->transaction->amount, $response->proposal->originalAmount);
        $this->assertEquals($body->targetCurrency, $response->proposal->resultingAmount->currencyCode);
    }

    protected function assertEqualAmounts(AmountData $expected, AmountData $actual)
    {
        $this->assertEquals($expected->amount, $actual->amount);
        $this->assertEquals($expected->currencyCode, $actual->currencyCode);
        $this->assertEquals($expected->numberOfDecimals, $actual->numberOfDecimals);
    }
}
