<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use DateTime;
use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class SubOperation extends DataObject
{
    /**
     * @var AmountData
     */
    public $amount = null;

    /**
     * @var string
     */
    public $authorizationCode = null;

    /**
     * @var string
     */
    public $operationId = null;

    /**
     * @var DateTime
     */
    public $operationTimestamp = null;

    /**
     * @var string
     */
    public $operationType = null;

    /**
     * @var string
     */
    public $responseCode = null;

    /**
     * @var string
     */
    public $responseCodeCategory = null;

    /**
     * @var string
     */
    public $responseCodeDescription = null;

    /**
     * @var string
     */
    public $retryAfter = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->authorizationCode)) {
            $object->authorizationCode = $this->authorizationCode;
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->operationTimestamp)) {
            $object->operationTimestamp = $this->operationTimestamp->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->operationType)) {
            $object->operationType = $this->operationType;
        }
        if (!is_null($this->responseCode)) {
            $object->responseCode = $this->responseCode;
        }
        if (!is_null($this->responseCodeCategory)) {
            $object->responseCodeCategory = $this->responseCodeCategory;
        }
        if (!is_null($this->responseCodeDescription)) {
            $object->responseCodeDescription = $this->responseCodeDescription;
        }
        if (!is_null($this->retryAfter)) {
            $object->retryAfter = $this->retryAfter;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'authorizationCode')) {
            $this->authorizationCode = $object->authorizationCode;
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'operationTimestamp')) {
            $this->operationTimestamp = new DateTime($object->operationTimestamp);
        }
        if (property_exists($object, 'operationType')) {
            $this->operationType = $object->operationType;
        }
        if (property_exists($object, 'responseCode')) {
            $this->responseCode = $object->responseCode;
        }
        if (property_exists($object, 'responseCodeCategory')) {
            $this->responseCodeCategory = $object->responseCodeCategory;
        }
        if (property_exists($object, 'responseCodeDescription')) {
            $this->responseCodeDescription = $object->responseCodeDescription;
        }
        if (property_exists($object, 'retryAfter')) {
            $this->retryAfter = $object->retryAfter;
        }
        return $this;
    }
}
