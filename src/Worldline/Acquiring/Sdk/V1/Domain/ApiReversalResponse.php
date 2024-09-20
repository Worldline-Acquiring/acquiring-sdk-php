<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ApiReversalResponse extends ApiActionResponse
{
    /**
     * @var AmountData
     */
    public $totalAuthorizedAmount = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->totalAuthorizedAmount)) {
            $object->totalAuthorizedAmount = $this->totalAuthorizedAmount->toObject();
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
        if (property_exists($object, 'totalAuthorizedAmount')) {
            if (!is_object($object->totalAuthorizedAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->totalAuthorizedAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->totalAuthorizedAmount = $value->fromObject($object->totalAuthorizedAmount);
        }
        return $this;
    }
}
