<?php

use Worldline\Acquiring\Sdk\ClientTestCase;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardpayments\GetPaymentStatusParams;

/**
 * @group integration
 *
 */
class ProcessPaymentTest extends ClientTestCase
{
    public function testProcessPayment()
    {
        $client = $this->getClient();
        $paymentsClient = $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->cardPayments();

        $apiPaymentRequest = $this->getApiPaymentRequest();
        $apiPaymentResponse = $paymentsClient->processPayment($apiPaymentRequest);

        $this->assertPaymentResponse($apiPaymentRequest, $apiPaymentResponse);

        $paymentId = $apiPaymentResponse->paymentId;

        $query = new GetPaymentStatusParams();
        $query->returnOperations = true;

        $apiPaymentResource = $paymentsClient->getPaymentStatus($paymentId, $query);

        $this->assertPaymentStatusResponse($paymentId, $apiPaymentResource);
    }
}
