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
class PlainCardData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardNumber = null;

    /**
     * @var string|null
     */
    public ?string $cardSecurityCode = null;

    /**
     * @var int|null
     */
    public ?int $cardSequenceNumber = null;

    /**
     * @var string|null
     */
    public ?string $expiryDate = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardNumber)) {
            $object->cardNumber = $this->cardNumber;
        }
        if (!is_null($this->cardSecurityCode)) {
            $object->cardSecurityCode = $this->cardSecurityCode;
        }
        if (!is_null($this->cardSequenceNumber)) {
            $object->cardSequenceNumber = $this->cardSequenceNumber;
        }
        if (!is_null($this->expiryDate)) {
            $object->expiryDate = $this->expiryDate;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PlainCardData
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'cardSecurityCode')) {
            $this->cardSecurityCode = $object->cardSecurityCode;
        }
        if (property_exists($object, 'cardSequenceNumber')) {
            $this->cardSequenceNumber = $object->cardSequenceNumber;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
