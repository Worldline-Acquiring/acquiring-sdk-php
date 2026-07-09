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
     * @var string|null
     */
    public ?string $paymentAccountReference = null;

    /**
     * @var string|null
     */
    public ?string $retrievalReferenceNumber = null;

    /**
     * @var string|null
     */
    public ?string $schemeTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $schemeTransactionLinkId = null;

    /**
     * @return object
     */
    public function toObject(): object
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
        if (!is_null($this->schemeTransactionLinkId)) {
            $object->schemeTransactionLinkId = $this->schemeTransactionLinkId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApiReferencesForResponses
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
        if (property_exists($object, 'schemeTransactionLinkId')) {
            $this->schemeTransactionLinkId = $object->schemeTransactionLinkId;
        }
        return $this;
    }
}
