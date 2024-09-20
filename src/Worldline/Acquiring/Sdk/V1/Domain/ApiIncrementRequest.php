<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use DateTime;
use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ApiIncrementRequest extends DataObject
{
    /**
     * @var DccData
     */
    public $dynamicCurrencyConversion = null;

    /**
     * @var AmountData
     */
    public $incrementAmount = null;

    /**
     * @var string
     */
    public $operationId = null;

    /**
     * @var DateTime
     */
    public $transactionTimestamp = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->dynamicCurrencyConversion)) {
            $object->dynamicCurrencyConversion = $this->dynamicCurrencyConversion->toObject();
        }
        if (!is_null($this->incrementAmount)) {
            $object->incrementAmount = $this->incrementAmount->toObject();
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->transactionTimestamp)) {
            $object->transactionTimestamp = $this->transactionTimestamp->format('Y-m-d\\TH:i:s.vP');
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
        if (property_exists($object, 'dynamicCurrencyConversion')) {
            if (!is_object($object->dynamicCurrencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dynamicCurrencyConversion, true) . '\' is not an object');
            }
            $value = new DccData();
            $this->dynamicCurrencyConversion = $value->fromObject($object->dynamicCurrencyConversion);
        }
        if (property_exists($object, 'incrementAmount')) {
            if (!is_object($object->incrementAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->incrementAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->incrementAmount = $value->fromObject($object->incrementAmount);
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'transactionTimestamp')) {
            $this->transactionTimestamp = new DateTime($object->transactionTimestamp);
        }
        return $this;
    }
}
