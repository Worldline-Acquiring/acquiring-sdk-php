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
class GetDCCRateRequest extends DataObject
{
    /**
     * @var CardDataForDcc
     */
    public $cardPaymentData = null;

    /**
     * @var string
     */
    public $operationId = null;

    /**
     * @var PointOfSaleDataForDcc
     */
    public $pointOfSaleData = null;

    /**
     * @var string
     */
    public $rateReferenceId = null;

    /**
     * @var string
     */
    public $targetCurrency = null;

    /**
     * @var TransactionDataForDcc
     */
    public $transaction = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->cardPaymentData)) {
            $object->cardPaymentData = $this->cardPaymentData->toObject();
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->pointOfSaleData)) {
            $object->pointOfSaleData = $this->pointOfSaleData->toObject();
        }
        if (!is_null($this->rateReferenceId)) {
            $object->rateReferenceId = $this->rateReferenceId;
        }
        if (!is_null($this->targetCurrency)) {
            $object->targetCurrency = $this->targetCurrency;
        }
        if (!is_null($this->transaction)) {
            $object->transaction = $this->transaction->toObject();
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
        if (property_exists($object, 'cardPaymentData')) {
            if (!is_object($object->cardPaymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentData, true) . '\' is not an object');
            }
            $value = new CardDataForDcc();
            $this->cardPaymentData = $value->fromObject($object->cardPaymentData);
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'pointOfSaleData')) {
            if (!is_object($object->pointOfSaleData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pointOfSaleData, true) . '\' is not an object');
            }
            $value = new PointOfSaleDataForDcc();
            $this->pointOfSaleData = $value->fromObject($object->pointOfSaleData);
        }
        if (property_exists($object, 'rateReferenceId')) {
            $this->rateReferenceId = $object->rateReferenceId;
        }
        if (property_exists($object, 'targetCurrency')) {
            $this->targetCurrency = $object->targetCurrency;
        }
        if (property_exists($object, 'transaction')) {
            if (!is_object($object->transaction)) {
                throw new UnexpectedValueException('value \'' . print_r($object->transaction, true) . '\' is not an object');
            }
            $value = new TransactionDataForDcc();
            $this->transaction = $value->fromObject($object->transaction);
        }
        return $this;
    }
}
