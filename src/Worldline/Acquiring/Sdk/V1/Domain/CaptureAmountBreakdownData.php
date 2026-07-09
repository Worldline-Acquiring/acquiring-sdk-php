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
class CaptureAmountBreakdownData extends DataObject
{
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
    public function fromObject(object $object): CaptureAmountBreakdownData
    {
        parent::fromObject($object);
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
