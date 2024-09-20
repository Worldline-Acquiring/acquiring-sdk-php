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
class MerchantData extends DataObject
{
    /**
     * @var string
     */
    public $address = null;

    /**
     * @var string
     */
    public $city = null;

    /**
     * @var string
     */
    public $countryCode = null;

    /**
     * @var int
     */
    public $merchantCategoryCode = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $postalCode = null;

    /**
     * @var string
     */
    public $stateCode = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address;
        }
        if (!is_null($this->city)) {
            $object->city = $this->city;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->merchantCategoryCode)) {
            $object->merchantCategoryCode = $this->merchantCategoryCode;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
        }
        if (!is_null($this->postalCode)) {
            $object->postalCode = $this->postalCode;
        }
        if (!is_null($this->stateCode)) {
            $object->stateCode = $this->stateCode;
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
        if (property_exists($object, 'address')) {
            $this->address = $object->address;
        }
        if (property_exists($object, 'city')) {
            $this->city = $object->city;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'merchantCategoryCode')) {
            $this->merchantCategoryCode = $object->merchantCategoryCode;
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        if (property_exists($object, 'postalCode')) {
            $this->postalCode = $object->postalCode;
        }
        if (property_exists($object, 'stateCode')) {
            $this->stateCode = $object->stateCode;
        }
        return $this;
    }
}
