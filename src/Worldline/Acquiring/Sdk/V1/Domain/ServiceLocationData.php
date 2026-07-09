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
class ServiceLocationData extends DataObject
{
    /**
     * @var ServiceLocationAddress|null
     */
    public ?ServiceLocationAddress $address = null;

    /**
     * @var GeoCoordinates|null
     */
    public ?GeoCoordinates $geoCoordinates = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address->toObject();
        }
        if (!is_null($this->geoCoordinates)) {
            $object->geoCoordinates = $this->geoCoordinates->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ServiceLocationData
    {
        parent::fromObject($object);
        if (property_exists($object, 'address')) {
            if (!is_object($object->address)) {
                throw new UnexpectedValueException('value \'' . print_r($object->address, true) . '\' is not an object');
            }
            $value = new ServiceLocationAddress();
            $this->address = $value->fromObject($object->address);
        }
        if (property_exists($object, 'geoCoordinates')) {
            if (!is_object($object->geoCoordinates)) {
                throw new UnexpectedValueException('value \'' . print_r($object->geoCoordinates, true) . '\' is not an object');
            }
            $value = new GeoCoordinates();
            $this->geoCoordinates = $value->fromObject($object->geoCoordinates);
        }
        return $this;
    }
}
