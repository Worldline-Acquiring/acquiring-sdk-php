<?php
namespace Worldline\Acquiring\Sdk\It;

use Worldline\Acquiring\Sdk\ClientTestCase;

/**
 * @group integration
 *
 */
class ProxyTest extends ClientTestCase
{
    public function testProxy()
    {
        $client = $this->getProxyClient();

        $dccRateRequest = $this->getGetDCCRateRequest();
        $dccRateResponse = $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->dynamicCurrencyConversion()->requestDccRate($dccRateRequest);

        $this->assertDccRateResponse($dccRateRequest, $dccRateResponse);
    }
}
