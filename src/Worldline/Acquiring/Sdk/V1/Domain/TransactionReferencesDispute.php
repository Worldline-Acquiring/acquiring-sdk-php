<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class TransactionReferencesDispute extends TransactionReferencesBase
{
    /**
     * @var string|null
     */
    public ?string $acquirerTransactionReference = null;

    /**
     * @var string|null
     */
    public ?string $merchantOperationId = null;

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
     * @var string|null
     */
    public ?string $terminalId = null;

    /**
     * @var string|null
     */
    public ?string $terminalTransactionReference = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerTransactionReference)) {
            $object->acquirerTransactionReference = $this->acquirerTransactionReference;
        }
        if (!is_null($this->merchantOperationId)) {
            $object->merchantOperationId = $this->merchantOperationId;
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
        if (!is_null($this->terminalId)) {
            $object->terminalId = $this->terminalId;
        }
        if (!is_null($this->terminalTransactionReference)) {
            $object->terminalTransactionReference = $this->terminalTransactionReference;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): TransactionReferencesDispute
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerTransactionReference')) {
            $this->acquirerTransactionReference = $object->acquirerTransactionReference;
        }
        if (property_exists($object, 'merchantOperationId')) {
            $this->merchantOperationId = $object->merchantOperationId;
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
        if (property_exists($object, 'terminalId')) {
            $this->terminalId = $object->terminalId;
        }
        if (property_exists($object, 'terminalTransactionReference')) {
            $this->terminalTransactionReference = $object->terminalTransactionReference;
        }
        return $this;
    }
}
