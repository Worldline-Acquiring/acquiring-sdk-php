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
class ApiPaymentReversalRequest extends DataObject
{
    /**
     * @var DccData|null
     */
    public ?DccData $dynamicCurrencyConversion = null;

    /**
     * @var string|null
     */
    public ?string $operationId = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $reversalAmount = null;

    /**
     * @var TerminalData|null
     */
    public ?TerminalData $terminalData = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $transactionTimestamp = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->dynamicCurrencyConversion)) {
            $object->dynamicCurrencyConversion = $this->dynamicCurrencyConversion->toObject();
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->reversalAmount)) {
            $object->reversalAmount = $this->reversalAmount->toObject();
        }
        if (!is_null($this->terminalData)) {
            $object->terminalData = $this->terminalData->toObject();
        }
        if (!is_null($this->transactionTimestamp)) {
            $object->transactionTimestamp = $this->transactionTimestamp->format('Y-m-d\\TH:i:s.vP');
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApiPaymentReversalRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'dynamicCurrencyConversion')) {
            if (!is_object($object->dynamicCurrencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dynamicCurrencyConversion, true) . '\' is not an object');
            }
            $value = new DccData();
            $this->dynamicCurrencyConversion = $value->fromObject($object->dynamicCurrencyConversion);
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'reversalAmount')) {
            if (!is_object($object->reversalAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->reversalAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->reversalAmount = $value->fromObject($object->reversalAmount);
        }
        if (property_exists($object, 'terminalData')) {
            if (!is_object($object->terminalData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->terminalData, true) . '\' is not an object');
            }
            $value = new TerminalData();
            $this->terminalData = $value->fromObject($object->terminalData);
        }
        if (property_exists($object, 'transactionTimestamp')) {
            $this->transactionTimestamp = new DateTime($object->transactionTimestamp);
        }
        return $this;
    }
}
