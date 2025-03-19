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
class ServiceLocationAddress extends DataObject
{
    /**
     * @var string
     */
    public $city = null;

    /**
     * @var string
     */
    public $countryCode = null;

    /**
     * @var string
     */
    public $countrySubdivisionCode = null;

    /**
     * @var string
     */
    public $postalCode = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->city)) {
            $object->city = $this->city;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->countrySubdivisionCode)) {
            $object->countrySubdivisionCode = $this->countrySubdivisionCode;
        }
        if (!is_null($this->postalCode)) {
            $object->postalCode = $this->postalCode;
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
        if (property_exists($object, 'city')) {
            $this->city = $object->city;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'countrySubdivisionCode')) {
            $this->countrySubdivisionCode = $object->countrySubdivisionCode;
        }
        if (property_exists($object, 'postalCode')) {
            $this->postalCode = $object->postalCode;
        }
        return $this;
    }
}
