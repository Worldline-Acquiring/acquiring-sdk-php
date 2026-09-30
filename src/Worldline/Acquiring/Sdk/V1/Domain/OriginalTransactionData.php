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
class OriginalTransactionData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardholderVerificationMethod = null;

    /**
     * @var string|null
     */
    public ?string $localTransactionDateTime = null;

    /**
     * @var string|null
     */
    public ?string $paymentCategory = null;

    /**
     * @var PaymentMethodData|null
     */
    public ?PaymentMethodData $paymentMethodData = null;

    /**
     * @var string|null
     */
    public ?string $pointOfSaleEntryMode = null;

    /**
     * @var string|null
     */
    public ?string $schemeProcessedDateTime = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $settlementAmount = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $transactionAmount = null;

    /**
     * @var TransactionReferencesDispute|null
     */
    public ?TransactionReferencesDispute $transactionReferences = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardholderVerificationMethod)) {
            $object->cardholderVerificationMethod = $this->cardholderVerificationMethod;
        }
        if (!is_null($this->localTransactionDateTime)) {
            $object->localTransactionDateTime = $this->localTransactionDateTime;
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
        if (!is_null($this->schemeProcessedDateTime)) {
            $object->schemeProcessedDateTime = $this->schemeProcessedDateTime;
        }
        if (!is_null($this->settlementAmount)) {
            $object->settlementAmount = $this->settlementAmount->toObject();
        }
        if (!is_null($this->transactionAmount)) {
            $object->transactionAmount = $this->transactionAmount->toObject();
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
    public function fromObject(object $object): OriginalTransactionData
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardholderVerificationMethod')) {
            $this->cardholderVerificationMethod = $object->cardholderVerificationMethod;
        }
        if (property_exists($object, 'localTransactionDateTime')) {
            $this->localTransactionDateTime = $object->localTransactionDateTime;
        }
        if (property_exists($object, 'paymentCategory')) {
            $this->paymentCategory = $object->paymentCategory;
        }
        if (property_exists($object, 'paymentMethodData')) {
            if (!is_object($object->paymentMethodData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentMethodData, true) . '\' is not an object');
            }
            $value = new PaymentMethodData();
            $this->paymentMethodData = $value->fromObject($object->paymentMethodData);
        }
        if (property_exists($object, 'pointOfSaleEntryMode')) {
            $this->pointOfSaleEntryMode = $object->pointOfSaleEntryMode;
        }
        if (property_exists($object, 'schemeProcessedDateTime')) {
            $this->schemeProcessedDateTime = $object->schemeProcessedDateTime;
        }
        if (property_exists($object, 'settlementAmount')) {
            if (!is_object($object->settlementAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->settlementAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->settlementAmount = $value->fromObject($object->settlementAmount);
        }
        if (property_exists($object, 'transactionAmount')) {
            if (!is_object($object->transactionAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->transactionAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->transactionAmount = $value->fromObject($object->transactionAmount);
        }
        if (property_exists($object, 'transactionReferences')) {
            if (!is_object($object->transactionReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->transactionReferences, true) . '\' is not an object');
            }
            $value = new TransactionReferencesDispute();
            $this->transactionReferences = $value->fromObject($object->transactionReferences);
        }
        return $this;
    }
}
