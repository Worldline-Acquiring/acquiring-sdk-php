<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1;

use RuntimeException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * Class ApiException
 *
 * @package Worldline\Acquiring\Sdk\V1
 */
class ApiException extends RuntimeException
{
    /** @var int */
    private $httpStatusCode;

    /**
     * @var DataObject
     */
    private $response;

    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The Worldline Acquiring platform returned an error response';
        }
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->response = $response;
    }

    public function __toString()
    {
        return sprintf(
            "exception '%s' with message '%s'. in %s:%d\nHTTP status code: %s\nResponse:\n%s\nStack trace:\n%s",
            __CLASS__,
            $this->getMessage(),
            $this->getFile(),
            $this->getLine(),
            $this->getHttpStatusCode(),
            json_encode($this->getResponse(), JSON_PRETTY_PRINT),
            $this->getTraceAsString()
        );
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @return DataObject
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function getType()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('type', $responseVariables)) {
            return '';
        }
        return $responseVariables['type'];
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('title', $responseVariables)) {
            return '';
        }
        return $responseVariables['title'];
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('status', $responseVariables)) {
            return 0;
        }
        return $responseVariables['status'];
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('detail', $responseVariables)) {
            return '';
        }
        return $responseVariables['detail'];
    }

    /**
     * @return string
     */
    public function getInstance()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('instance', $responseVariables)) {
            return '';
        }
        return $responseVariables['instance'];
    }
}
