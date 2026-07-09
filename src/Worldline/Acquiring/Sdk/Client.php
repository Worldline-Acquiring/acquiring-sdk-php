<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk;

use Worldline\Acquiring\Sdk\Logging\CommunicatorLogger;
use Worldline\Acquiring\Sdk\V1\V1Client;

/**
 * Worldline Acquiring platform client.
 *
 * @package Worldline\Acquiring\Sdk
 */
class Client extends ApiResource
{
    /**
     * @var Communicator
     */
    private Communicator $communicator;

    /**
     * Construct a new Worldline Acquiring platform API client.
     *
     * @param Communicator $communicator
     */
    public function __construct(Communicator $communicator)
    {
        parent::__construct();
        $this->communicator = $communicator;
        $this->context = array();
    }

    /**
     * @return Communicator
     */
    protected function getCommunicator(): Communicator
    {
        return $this->communicator;
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     *
     * @return void
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger): void
    {
        $this->getCommunicator()->enableLogging($communicatorLogger);
    }

    /**
     * @return void
     */
    public function disableLogging(): void
    {
        $this->getCommunicator()->disableLogging();
    }

    public function v1(): V1Client
    {
        return new V1Client($this, $this->context);
    }
}
