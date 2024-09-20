<?php

use Worldline\Acquiring\Sdk\ClientTestCase;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Payments\GetPaymentStatusParams;

/**
 * @group integration
 *
 */
class RequestDccRateTest extends ClientTestCase
{
    public function testRequestDccRate()
    {
        $client = $this->getClient();

        $dccRateRequest = $this->getGetDCCRateRequest();
        $dccRateResponse = $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->dynamicCurrencyConversion()->requestDccRate($dccRateRequest);

        $this->assertDccRateResponse($dccRateRequest, $dccRateResponse);
    }
}
