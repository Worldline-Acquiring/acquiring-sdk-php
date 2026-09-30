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
class PaymentMethodDataBase extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $maskedIdentifier = null;

    /**
     * @var string|null
     */
    public ?string $scheme = null;

    /**
     * @var string|null
     */
    public ?string $schemeBrand = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->maskedIdentifier)) {
            $object->maskedIdentifier = $this->maskedIdentifier;
        }
        if (!is_null($this->scheme)) {
            $object->scheme = $this->scheme;
        }
        if (!is_null($this->schemeBrand)) {
            $object->schemeBrand = $this->schemeBrand;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentMethodDataBase
    {
        parent::fromObject($object);
        if (property_exists($object, 'maskedIdentifier')) {
            $this->maskedIdentifier = $object->maskedIdentifier;
        }
        if (property_exists($object, 'scheme')) {
            $this->scheme = $object->scheme;
        }
        if (property_exists($object, 'schemeBrand')) {
            $this->schemeBrand = $object->schemeBrand;
        }
        return $this;
    }
}
