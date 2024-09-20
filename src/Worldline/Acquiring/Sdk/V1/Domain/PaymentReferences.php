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
class PaymentReferences extends DataObject
{
    /**
     * @var string
     */
    public $dynamicDescriptor = null;

    /**
     * @var string
     */
    public $merchantReference = null;

    /**
     * @var string
     */
    public $retrievalReferenceNumber = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->dynamicDescriptor)) {
            $object->dynamicDescriptor = $this->dynamicDescriptor;
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->retrievalReferenceNumber)) {
            $object->retrievalReferenceNumber = $this->retrievalReferenceNumber;
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
        if (property_exists($object, 'dynamicDescriptor')) {
            $this->dynamicDescriptor = $object->dynamicDescriptor;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'retrievalReferenceNumber')) {
            $this->retrievalReferenceNumber = $object->retrievalReferenceNumber;
        }
        return $this;
    }
}
