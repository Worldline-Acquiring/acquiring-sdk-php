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
class ECommerceDataForResponse extends DataObject
{
    /**
     * @var string
     */
    public $addressVerificationResult = null;

    /**
     * @var string
     */
    public $cardSecurityCodeResult = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->addressVerificationResult)) {
            $object->addressVerificationResult = $this->addressVerificationResult;
        }
        if (!is_null($this->cardSecurityCodeResult)) {
            $object->cardSecurityCodeResult = $this->cardSecurityCodeResult;
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
        if (property_exists($object, 'addressVerificationResult')) {
            $this->addressVerificationResult = $object->addressVerificationResult;
        }
        if (property_exists($object, 'cardSecurityCodeResult')) {
            $this->cardSecurityCodeResult = $object->cardSecurityCodeResult;
        }
        return $this;
    }
}
