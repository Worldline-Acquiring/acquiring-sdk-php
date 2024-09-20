<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use DateTime;
use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ApiRefundRequest extends DataObject
{
    /**
     * @var AmountData
     */
    public $amount = null;

    /**
     * @var CardPaymentDataForRefund
     */
    public $cardPaymentData = null;

    /**
     * @var DccData
     */
    public $dynamicCurrencyConversion = null;

    /**
     * @var MerchantData
     */
    public $merchant = null;

    /**
     * @var string
     */
    public $operationId = null;

    /**
     * @var PaymentReferences
     */
    public $references = null;

    /**
     * @var DateTime
     */
    public $transactionTimestamp = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->cardPaymentData)) {
            $object->cardPaymentData = $this->cardPaymentData->toObject();
        }
        if (!is_null($this->dynamicCurrencyConversion)) {
            $object->dynamicCurrencyConversion = $this->dynamicCurrencyConversion->toObject();
        }
        if (!is_null($this->merchant)) {
            $object->merchant = $this->merchant->toObject();
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->transactionTimestamp)) {
            $object->transactionTimestamp = $this->transactionTimestamp->format('Y-m-d\\TH:i:s.vP');
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
        if (property_exists($object, 'amount')) {
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'cardPaymentData')) {
            if (!is_object($object->cardPaymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentData, true) . '\' is not an object');
            }
            $value = new CardPaymentDataForRefund();
            $this->cardPaymentData = $value->fromObject($object->cardPaymentData);
        }
        if (property_exists($object, 'dynamicCurrencyConversion')) {
            if (!is_object($object->dynamicCurrencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dynamicCurrencyConversion, true) . '\' is not an object');
            }
            $value = new DccData();
            $this->dynamicCurrencyConversion = $value->fromObject($object->dynamicCurrencyConversion);
        }
        if (property_exists($object, 'merchant')) {
            if (!is_object($object->merchant)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchant, true) . '\' is not an object');
            }
            $value = new MerchantData();
            $this->merchant = $value->fromObject($object->merchant);
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'transactionTimestamp')) {
            $this->transactionTimestamp = new DateTime($object->transactionTimestamp);
        }
        return $this;
    }
}
