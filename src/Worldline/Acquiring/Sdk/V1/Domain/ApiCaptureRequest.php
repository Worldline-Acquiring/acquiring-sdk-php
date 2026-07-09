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
class ApiCaptureRequest extends DataObject
{
    /**
     * @var AmountData|null
     */
    public ?AmountData $amount = null;

    /**
     * @var CaptureAmountBreakdownData|null
     */
    public ?CaptureAmountBreakdownData $captureAmountBreakdownData = null;

    /**
     * @var int|null
     */
    public ?int $captureSequenceNumber = null;

    /**
     * @var DccData|null
     */
    public ?DccData $dynamicCurrencyConversion = null;

    /**
     * @var bool|null
     */
    public ?bool $isFinal = null;

    /**
     * @var MarketplaceData|null
     */
    public ?MarketplaceData $marketplaceData = null;

    /**
     * @var string|null
     */
    public ?string $operationId = null;

    /**
     * @var PaymentReferences|null
     */
    public ?PaymentReferences $references = null;

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
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->captureAmountBreakdownData)) {
            $object->captureAmountBreakdownData = $this->captureAmountBreakdownData->toObject();
        }
        if (!is_null($this->captureSequenceNumber)) {
            $object->captureSequenceNumber = $this->captureSequenceNumber;
        }
        if (!is_null($this->dynamicCurrencyConversion)) {
            $object->dynamicCurrencyConversion = $this->dynamicCurrencyConversion->toObject();
        }
        if (!is_null($this->isFinal)) {
            $object->isFinal = $this->isFinal;
        }
        if (!is_null($this->marketplaceData)) {
            $object->marketplaceData = $this->marketplaceData->toObject();
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
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
    public function fromObject(object $object): ApiCaptureRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'captureAmountBreakdownData')) {
            if (!is_object($object->captureAmountBreakdownData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->captureAmountBreakdownData, true) . '\' is not an object');
            }
            $value = new CaptureAmountBreakdownData();
            $this->captureAmountBreakdownData = $value->fromObject($object->captureAmountBreakdownData);
        }
        if (property_exists($object, 'captureSequenceNumber')) {
            $this->captureSequenceNumber = $object->captureSequenceNumber;
        }
        if (property_exists($object, 'dynamicCurrencyConversion')) {
            if (!is_object($object->dynamicCurrencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dynamicCurrencyConversion, true) . '\' is not an object');
            }
            $value = new DccData();
            $this->dynamicCurrencyConversion = $value->fromObject($object->dynamicCurrencyConversion);
        }
        if (property_exists($object, 'isFinal')) {
            $this->isFinal = $object->isFinal;
        }
        if (property_exists($object, 'marketplaceData')) {
            if (!is_object($object->marketplaceData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->marketplaceData, true) . '\' is not an object');
            }
            $value = new MarketplaceData();
            $this->marketplaceData = $value->fromObject($object->marketplaceData);
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
