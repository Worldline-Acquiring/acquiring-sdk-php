<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\V1\Acquirer\AcquirerClient;
use Worldline\Acquiring\Sdk\V1\Disputedocuments\DisputeDocumentsClient;
use Worldline\Acquiring\Sdk\V1\Disputeentries\DisputeEntriesClient;
use Worldline\Acquiring\Sdk\V1\Disputemanagement\DisputeManagementClient;
use Worldline\Acquiring\Sdk\V1\Ping\PingClient;

/**
 * V1 client
 *
 * @package Worldline\Acquiring\Sdk\V1
 */
class V1Client extends ApiResource
{
    /**
     * Resource /processing/v1/{acquirerId}
     *
     * @param string $acquirerId
     *
     * @return AcquirerClient
     */
    public function acquirer(string $acquirerId): AcquirerClient
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
    public function ping(): PingClient
    {
        return new PingClient($this, $this->context);
    }

    /**
     * Resource /dispute-management/v1/disputes/search
     *
     * @return DisputeManagementClient
     */
    public function disputeManagement(): DisputeManagementClient
    {
        return new DisputeManagementClient($this, $this->context);
    }

    /**
     * Resource /dispute-management/v1/documents
     *
     * @return DisputeDocumentsClient
     */
    public function disputeDocuments(): DisputeDocumentsClient
    {
        return new DisputeDocumentsClient($this, $this->context);
    }

    /**
     * Resource /dispute-management/v1/dispute-entries/search
     *
     * @return DisputeEntriesClient
     */
    public function disputeEntries(): DisputeEntriesClient
    {
        return new DisputeEntriesClient($this, $this->context);
    }
}
