<?php

use Worldline\Acquiring\Sdk\ClientTestCase;

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
