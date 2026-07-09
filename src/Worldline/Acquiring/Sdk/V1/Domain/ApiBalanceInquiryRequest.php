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
class ApiBalanceInquiryRequest extends DataObject
{
    /**
     * @var CardPaymentDataForBalanceInquiry|null
     */
    public ?CardPaymentDataForBalanceInquiry $cardPaymentData = null;

    /**
     * @var MerchantData|null
     */
    public ?MerchantData $merchant = null;

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
        if (!is_null($this->cardPaymentData)) {
            $object->cardPaymentData = $this->cardPaymentData->toObject();
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
    public function fromObject(object $object): ApiBalanceInquiryRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardPaymentData')) {
            if (!is_object($object->cardPaymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentData, true) . '\' is not an object');
            }
            $value = new CardPaymentDataForBalanceInquiry();
            $this->cardPaymentData = $value->fromObject($object->cardPaymentData);
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
