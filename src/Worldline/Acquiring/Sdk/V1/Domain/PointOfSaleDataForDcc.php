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
class PointOfSaleDataForDcc extends DataObject
{
    /**
     * @var string
     */
    public $terminalCountryCode = null;

    /**
     * @var string
     */
    public $terminalId = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->terminalCountryCode)) {
            $object->terminalCountryCode = $this->terminalCountryCode;
        }
        if (!is_null($this->terminalId)) {
            $object->terminalId = $this->terminalId;
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
        if (property_exists($object, 'terminalCountryCode')) {
            $this->terminalCountryCode = $object->terminalCountryCode;
        }
        if (property_exists($object, 'terminalId')) {
            $this->terminalId = $object->terminalId;
        }
        return $this;
    }
}
