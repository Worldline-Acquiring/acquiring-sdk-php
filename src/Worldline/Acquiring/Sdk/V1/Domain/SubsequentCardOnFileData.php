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
class SubsequentCardOnFileData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardOnFileInitiator = null;

    /**
     * @var string|null
     */
    public ?string $initialSchemeTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $initialSchemeTransactionLinkId = null;

    /**
     * @var string|null
     */
    public ?string $transactionType = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardOnFileInitiator)) {
            $object->cardOnFileInitiator = $this->cardOnFileInitiator;
        }
        if (!is_null($this->initialSchemeTransactionId)) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
        }
        if (!is_null($this->initialSchemeTransactionLinkId)) {
            $object->initialSchemeTransactionLinkId = $this->initialSchemeTransactionLinkId;
        }
        if (!is_null($this->transactionType)) {
            $object->transactionType = $this->transactionType;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubsequentCardOnFileData
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardOnFileInitiator')) {
            $this->cardOnFileInitiator = $object->cardOnFileInitiator;
        }
        if (property_exists($object, 'initialSchemeTransactionId')) {
            $this->initialSchemeTransactionId = $object->initialSchemeTransactionId;
        }
        if (property_exists($object, 'initialSchemeTransactionLinkId')) {
            $this->initialSchemeTransactionLinkId = $object->initialSchemeTransactionLinkId;
        }
        if (property_exists($object, 'transactionType')) {
            $this->transactionType = $object->transactionType;
        }
        return $this;
    }
}
