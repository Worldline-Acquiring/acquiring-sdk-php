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
class DccData extends DataObject
{
    /**
     * @var int
     */
    public $amount = null;

    /**
     * @var float
     */
    public $conversionRate = null;

    /**
     * @var string
     */
    public $currencyCode = null;

    /**
     * @var int
     */
    public $numberOfDecimals = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
        }
        if (!is_null($this->conversionRate)) {
            $object->conversionRate = $this->conversionRate;
        }
        if (!is_null($this->currencyCode)) {
            $object->currencyCode = $this->currencyCode;
        }
        if (!is_null($this->numberOfDecimals)) {
            $object->numberOfDecimals = $this->numberOfDecimals;
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
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'conversionRate')) {
            $this->conversionRate = $object->conversionRate;
        }
        if (property_exists($object, 'currencyCode')) {
            $this->currencyCode = $object->currencyCode;
        }
        if (property_exists($object, 'numberOfDecimals')) {
            $this->numberOfDecimals = $object->numberOfDecimals;
        }
        return $this;
    }
}
