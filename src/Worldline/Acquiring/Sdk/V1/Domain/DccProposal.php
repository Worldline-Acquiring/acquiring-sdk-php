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
class DccProposal extends DataObject
{
    /**
     * @var AmountData
     */
    public $originalAmount = null;

    /**
     * @var RateData
     */
    public $rate = null;

    /**
     * @var string
     */
    public $rateReferenceId = null;

    /**
     * @var AmountData
     */
    public $resultingAmount = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->originalAmount)) {
            $object->originalAmount = $this->originalAmount->toObject();
        }
        if (!is_null($this->rate)) {
            $object->rate = $this->rate->toObject();
        }
        if (!is_null($this->rateReferenceId)) {
            $object->rateReferenceId = $this->rateReferenceId;
        }
        if (!is_null($this->resultingAmount)) {
            $object->resultingAmount = $this->resultingAmount->toObject();
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
        if (property_exists($object, 'originalAmount')) {
            if (!is_object($object->originalAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->originalAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->originalAmount = $value->fromObject($object->originalAmount);
        }
        if (property_exists($object, 'rate')) {
            if (!is_object($object->rate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->rate, true) . '\' is not an object');
            }
            $value = new RateData();
            $this->rate = $value->fromObject($object->rate);
        }
        if (property_exists($object, 'rateReferenceId')) {
            $this->rateReferenceId = $object->rateReferenceId;
        }
        if (property_exists($object, 'resultingAmount')) {
            if (!is_object($object->resultingAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->resultingAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->resultingAmount = $value->fromObject($object->resultingAmount);
        }
        return $this;
    }
}
