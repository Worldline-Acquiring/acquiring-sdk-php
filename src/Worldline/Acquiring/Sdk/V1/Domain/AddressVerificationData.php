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
class AddressVerificationData extends DataObject
{
    /**
     * @var string
     */
    public $cardholderAddress = null;

    /**
     * @var string
     */
    public $cardholderPostalCode = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->cardholderAddress)) {
            $object->cardholderAddress = $this->cardholderAddress;
        }
        if (!is_null($this->cardholderPostalCode)) {
            $object->cardholderPostalCode = $this->cardholderPostalCode;
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
        if (property_exists($object, 'cardholderAddress')) {
            $this->cardholderAddress = $object->cardholderAddress;
        }
        if (property_exists($object, 'cardholderPostalCode')) {
            $this->cardholderPostalCode = $object->cardholderPostalCode;
        }
        return $this;
    }
}
