<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk;

use Worldline\Acquiring\Sdk\Logging\CommunicatorLogger;
use Worldline\Acquiring\Sdk\V1\V1Client;

/**
 * Worldline Acquiring platform client.
 */
class Client extends ApiResource
{
    /** @var Communicator */
    private $communicator;

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
    protected function getCommunicator()
    {
        return $this->communicator;
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger)
    {
        $this->getCommunicator()->enableLogging($communicatorLogger);
    }

    /**
     *
     */
    public function disableLogging()
    {
        $this->getCommunicator()->disableLogging();
    }

    public function v1()
    {
        return new V1Client($this, $this->context);
    }
}
