<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\V1\Acquirer\AcquirerClient;
use Worldline\Acquiring\Sdk\V1\Ping\PingClient;

/**
 * V1 client
 */
class V1Client extends ApiResource
{
    /**
     * Resource /processing/v1/{acquirerId}
     *
     * @param string $acquirerId
     * @return AcquirerClient
     */
    public function acquirer($acquirerId)
    {
        $newContext = $this->context;
        $newContext['acquirerId'] = $acquirerId;
        return new AcquirerClient($this, $newContext);
    }

    /**
     * Resource /services/v1/ping
     *
     * @return PingClient
     */
    public function ping()
    {
        return new PingClient($this, $this->context);
    }
}
