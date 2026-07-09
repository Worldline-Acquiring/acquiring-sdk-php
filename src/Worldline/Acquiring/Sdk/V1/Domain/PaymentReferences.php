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
     * @var string|null
     */
    public ?string $dynamicDescriptor = null;

    /**
     * @var string|null
     */
    public ?string $merchantReference = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dynamicDescriptor)) {
            $object->dynamicDescriptor = $this->dynamicDescriptor;
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentReferences
    {
        parent::fromObject($object);
        if (property_exists($object, 'dynamicDescriptor')) {
            $this->dynamicDescriptor = $object->dynamicDescriptor;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        return $this;
    }
}
