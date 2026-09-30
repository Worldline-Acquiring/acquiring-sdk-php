<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class PaymentMethodData extends PaymentMethodDataBase
{
    /**
     * @var string|null
     */
    public ?string $issuingCountryCode = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->issuingCountryCode)) {
            $object->issuingCountryCode = $this->issuingCountryCode;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentMethodData
    {
        parent::fromObject($object);
        if (property_exists($object, 'issuingCountryCode')) {
            $this->issuingCountryCode = $object->issuingCountryCode;
        }
        return $this;
    }
}
