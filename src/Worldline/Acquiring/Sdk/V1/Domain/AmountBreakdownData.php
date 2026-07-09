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
class AmountBreakdownData extends DataObject
{
    /**
     * @var AmountData|null
     */
    public ?AmountData $cashbackAmount = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $tipAmount = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cashbackAmount)) {
            $object->cashbackAmount = $this->cashbackAmount->toObject();
        }
        if (!is_null($this->tipAmount)) {
            $object->tipAmount = $this->tipAmount->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AmountBreakdownData
    {
        parent::fromObject($object);
        if (property_exists($object, 'cashbackAmount')) {
            if (!is_object($object->cashbackAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cashbackAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->cashbackAmount = $value->fromObject($object->cashbackAmount);
        }
        if (property_exists($object, 'tipAmount')) {
            if (!is_object($object->tipAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->tipAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->tipAmount = $value->fromObject($object->tipAmount);
        }
        return $this;
    }
}
