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
class PointOfSaleDataForResponse extends DataObject
{
    /**
     * @var string
     */
    public $panLast4Digits = null;

    /**
     * @var int
     */
    public $pinRetryCounter = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->panLast4Digits)) {
            $object->panLast4Digits = $this->panLast4Digits;
        }
        if (!is_null($this->pinRetryCounter)) {
            $object->pinRetryCounter = $this->pinRetryCounter;
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
        if (property_exists($object, 'panLast4Digits')) {
            $this->panLast4Digits = $object->panLast4Digits;
        }
        if (property_exists($object, 'pinRetryCounter')) {
            $this->pinRetryCounter = $object->pinRetryCounter;
        }
        return $this;
    }
}
