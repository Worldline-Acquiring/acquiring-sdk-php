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
class SignedAmountData extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $amount = null;

    /**
     * @var string|null
     */
    public ?string $currencyCode = null;

    /**
     * @var string|null
     */
    public ?string $debitCreditIndicator = null;

    /**
     * @var int|null
     */
    public ?int $numberOfDecimals = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
        }
        if (!is_null($this->currencyCode)) {
            $object->currencyCode = $this->currencyCode;
        }
        if (!is_null($this->debitCreditIndicator)) {
            $object->debitCreditIndicator = $this->debitCreditIndicator;
        }
        if (!is_null($this->numberOfDecimals)) {
            $object->numberOfDecimals = $this->numberOfDecimals;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SignedAmountData
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'currencyCode')) {
            $this->currencyCode = $object->currencyCode;
        }
        if (property_exists($object, 'debitCreditIndicator')) {
            $this->debitCreditIndicator = $object->debitCreditIndicator;
        }
        if (property_exists($object, 'numberOfDecimals')) {
            $this->numberOfDecimals = $object->numberOfDecimals;
        }
        return $this;
    }
}
