<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\MerchantClient;

/**
 * Acquirer client.
 *
 * @package Worldline\Acquiring\Sdk\V1\Acquirer
 */
class AcquirerClient extends ApiResource
{
    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}
     *
     * @param string $merchantId
     *
     * @return MerchantClient
     */
    public function merchant(string $merchantId): MerchantClient
    {
        $newContext = $this->context;
        $newContext['merchantId'] = $merchantId;
        return new MerchantClient($this, $newContext);
    }
}
