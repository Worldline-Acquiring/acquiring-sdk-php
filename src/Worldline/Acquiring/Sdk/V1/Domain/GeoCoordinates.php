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
class GeoCoordinates extends DataObject
{
    /**
     * @var float
     */
    public $latitude = null;

    /**
     * @var float
     */
    public $longitude = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->latitude)) {
            $object->latitude = $this->latitude;
        }
        if (!is_null($this->longitude)) {
            $object->longitude = $this->longitude;
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
        if (property_exists($object, 'latitude')) {
            $this->latitude = $object->latitude;
        }
        if (property_exists($object, 'longitude')) {
            $this->longitude = $object->longitude;
        }
        return $this;
    }
}
