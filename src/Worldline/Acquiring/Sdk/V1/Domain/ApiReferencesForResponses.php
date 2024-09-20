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
class ApiReferencesForResponses extends DataObject
{
    /**
     * @var string
     */
    public $paymentAccountReference = null;

    /**
     * @var string
     */
    public $retrievalReferenceNumber = null;

    /**
     * @var string
     */
    public $schemeTransactionId = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->paymentAccountReference)) {
            $object->paymentAccountReference = $this->paymentAccountReference;
        }
        if (!is_null($this->retrievalReferenceNumber)) {
            $object->retrievalReferenceNumber = $this->retrievalReferenceNumber;
        }
        if (!is_null($this->schemeTransactionId)) {
            $object->schemeTransactionId = $this->schemeTransactionId;
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
        if (property_exists($object, 'paymentAccountReference')) {
            $this->paymentAccountReference = $object->paymentAccountReference;
        }
        if (property_exists($object, 'retrievalReferenceNumber')) {
            $this->retrievalReferenceNumber = $object->retrievalReferenceNumber;
        }
        if (property_exists($object, 'schemeTransactionId')) {
            $this->schemeTransactionId = $object->schemeTransactionId;
        }
        return $this;
    }
}
