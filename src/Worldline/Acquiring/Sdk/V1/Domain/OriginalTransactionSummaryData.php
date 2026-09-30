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
class OriginalTransactionSummaryData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardholderVerificationMethod = null;

    /**
     * @var string|null
     */
    public ?string $paymentCategory = null;

    /**
     * @var PaymentMethodDataBase|null
     */
    public ?PaymentMethodDataBase $paymentMethodData = null;

    /**
     * @var string|null
     */
    public ?string $pointOfSaleEntryMode = null;

    /**
     * @var TransactionReferencesBase|null
     */
    public ?TransactionReferencesBase $transactionReferences = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardholderVerificationMethod)) {
            $object->cardholderVerificationMethod = $this->cardholderVerificationMethod;
        }
        if (!is_null($this->paymentCategory)) {
            $object->paymentCategory = $this->paymentCategory;
        }
        if (!is_null($this->paymentMethodData)) {
            $object->paymentMethodData = $this->paymentMethodData->toObject();
        }
        if (!is_null($this->pointOfSaleEntryMode)) {
            $object->pointOfSaleEntryMode = $this->pointOfSaleEntryMode;
        }
        if (!is_null($this->transactionReferences)) {
            $object->transactionReferences = $this->transactionReferences->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OriginalTransactionSummaryData
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardholderVerificationMethod')) {
            $this->cardholderVerificationMethod = $object->cardholderVerificationMethod;
        }
        if (property_exists($object, 'paymentCategory')) {
            $this->paymentCategory = $object->paymentCategory;
        }
        if (property_exists($object, 'paymentMethodData')) {
            if (!is_object($object->paymentMethodData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentMethodData, true) . '\' is not an object');
            }
            $value = new PaymentMethodDataBase();
            $this->paymentMethodData = $value->fromObject($object->paymentMethodData);
        }
        if (property_exists($object, 'pointOfSaleEntryMode')) {
            $this->pointOfSaleEntryMode = $object->pointOfSaleEntryMode;
        }
        if (property_exists($object, 'transactionReferences')) {
            if (!is_object($object->transactionReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->transactionReferences, true) . '\' is not an object');
            }
            $value = new TransactionReferencesBase();
            $this->transactionReferences = $value->fromObject($object->transactionReferences);
        }
        return $this;
    }
}
