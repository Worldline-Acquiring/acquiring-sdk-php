<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ApiAccountVerificationResponse extends DataObject
{
    /**
     * @var string
     */
    public $authorizationCode = null;

    /**
     * @var CardPaymentDataForResponse
     */
    public $cardPaymentData = null;

    /**
     * @var string
     */
    public $operationId = null;

    /**
     * @var ApiReferencesForResponses
     */
    public $references = null;

    /**
     * @var string
     */
    public $responder = null;

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
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->authorizationCode)) {
            $object->authorizationCode = $this->authorizationCode;
        }
        if (!is_null($this->cardPaymentData)) {
            $object->cardPaymentData = $this->cardPaymentData->toObject();
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->responder)) {
            $object->responder = $this->responder;
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
        if (property_exists($object, 'authorizationCode')) {
            $this->authorizationCode = $object->authorizationCode;
        }
        if (property_exists($object, 'cardPaymentData')) {
            if (!is_object($object->cardPaymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentData, true) . '\' is not an object');
            }
            $value = new CardPaymentDataForResponse();
            $this->cardPaymentData = $value->fromObject($object->cardPaymentData);
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new ApiReferencesForResponses();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'responder')) {
            $this->responder = $object->responder;
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
        return $this;
    }
}
