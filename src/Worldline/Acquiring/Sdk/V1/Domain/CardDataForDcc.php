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
class CardDataForDcc extends DataObject
{
    /**
     * @var string
     */
    public $bin = null;

    /**
     * @var string
     */
    public $brand = null;

    /**
     * @var string
     */
    public $cardCountryCode = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->bin)) {
            $object->bin = $this->bin;
        }
        if (!is_null($this->brand)) {
            $object->brand = $this->brand;
        }
        if (!is_null($this->cardCountryCode)) {
            $object->cardCountryCode = $this->cardCountryCode;
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
        if (property_exists($object, 'bin')) {
            $this->bin = $object->bin;
        }
        if (property_exists($object, 'brand')) {
            $this->brand = $object->brand;
        }
        if (property_exists($object, 'cardCountryCode')) {
            $this->cardCountryCode = $object->cardCountryCode;
        }
        return $this;
    }
}
