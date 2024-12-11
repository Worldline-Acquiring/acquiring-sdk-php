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
class CardPaymentDataForResource extends DataObject
{
    /**
     * @var string
     */
    public $brand = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->brand)) {
            $object->brand = $this->brand;
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
        if (property_exists($object, 'brand')) {
            $this->brand = $object->brand;
        }
        return $this;
    }
}
