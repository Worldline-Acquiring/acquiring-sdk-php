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
class DisputeCase extends DataObject
{
    /**
     * @var DisputeDateTimeData|null
     */
    public ?DisputeDateTimeData $disputeDateTimeData = null;

    /**
     * @var string|null
     */
    public ?string $disputeId = null;

    /**
     * @var DisputeReferences|null
     */
    public ?DisputeReferences $disputeReferences = null;

    /**
     * @var string|null
     */
    public ?string $disputeStage = null;

    /**
     * @var string|null
     */
    public ?string $disputeStatus = null;

    /**
     * @var string|null
     */
    public ?string $disputeStatusCategory = null;

    /**
     * @var bool|null
     */
    public ?bool $isOpen = null;

    /**
     * @var SignedAmountData|null
     */
    public ?SignedAmountData $merchantBalanceAmount = null;

    /**
     * @var DisputeMerchantData|null
     */
    public ?DisputeMerchantData $merchantData = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $originalDisputeAmount = null;

    /**
     * @var OriginalTransactionData|null
     */
    public ?OriginalTransactionData $originalTransactionData = null;

    /**
     * @var string|null
     */
    public ?string $schemeReason = null;

    /**
     * @var string|null
     */
    public ?string $schemeReasonDescription = null;

    /**
     * @var string|null
     */
    public ?string $unifiedCategory = null;

    /**
     * @var string|null
     */
    public ?string $unifiedReason = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->disputeDateTimeData)) {
            $object->disputeDateTimeData = $this->disputeDateTimeData->toObject();
        }
        if (!is_null($this->disputeId)) {
            $object->disputeId = $this->disputeId;
        }
        if (!is_null($this->disputeReferences)) {
            $object->disputeReferences = $this->disputeReferences->toObject();
        }
        if (!is_null($this->disputeStage)) {
            $object->disputeStage = $this->disputeStage;
        }
        if (!is_null($this->disputeStatus)) {
            $object->disputeStatus = $this->disputeStatus;
        }
        if (!is_null($this->disputeStatusCategory)) {
            $object->disputeStatusCategory = $this->disputeStatusCategory;
        }
        if (!is_null($this->isOpen)) {
            $object->isOpen = $this->isOpen;
        }
        if (!is_null($this->merchantBalanceAmount)) {
            $object->merchantBalanceAmount = $this->merchantBalanceAmount->toObject();
        }
        if (!is_null($this->merchantData)) {
            $object->merchantData = $this->merchantData->toObject();
        }
        if (!is_null($this->originalDisputeAmount)) {
            $object->originalDisputeAmount = $this->originalDisputeAmount->toObject();
        }
        if (!is_null($this->originalTransactionData)) {
            $object->originalTransactionData = $this->originalTransactionData->toObject();
        }
        if (!is_null($this->schemeReason)) {
            $object->schemeReason = $this->schemeReason;
        }
        if (!is_null($this->schemeReasonDescription)) {
            $object->schemeReasonDescription = $this->schemeReasonDescription;
        }
        if (!is_null($this->unifiedCategory)) {
            $object->unifiedCategory = $this->unifiedCategory;
        }
        if (!is_null($this->unifiedReason)) {
            $object->unifiedReason = $this->unifiedReason;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeCase
    {
        parent::fromObject($object);
        if (property_exists($object, 'disputeDateTimeData')) {
            if (!is_object($object->disputeDateTimeData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputeDateTimeData, true) . '\' is not an object');
            }
            $value = new DisputeDateTimeData();
            $this->disputeDateTimeData = $value->fromObject($object->disputeDateTimeData);
        }
        if (property_exists($object, 'disputeId')) {
            $this->disputeId = $object->disputeId;
        }
        if (property_exists($object, 'disputeReferences')) {
            if (!is_object($object->disputeReferences)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputeReferences, true) . '\' is not an object');
            }
            $value = new DisputeReferences();
            $this->disputeReferences = $value->fromObject($object->disputeReferences);
        }
        if (property_exists($object, 'disputeStage')) {
            $this->disputeStage = $object->disputeStage;
        }
        if (property_exists($object, 'disputeStatus')) {
            $this->disputeStatus = $object->disputeStatus;
        }
        if (property_exists($object, 'disputeStatusCategory')) {
            $this->disputeStatusCategory = $object->disputeStatusCategory;
        }
        if (property_exists($object, 'isOpen')) {
            $this->isOpen = $object->isOpen;
        }
        if (property_exists($object, 'merchantBalanceAmount')) {
            if (!is_object($object->merchantBalanceAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantBalanceAmount, true) . '\' is not an object');
            }
            $value = new SignedAmountData();
            $this->merchantBalanceAmount = $value->fromObject($object->merchantBalanceAmount);
        }
        if (property_exists($object, 'merchantData')) {
            if (!is_object($object->merchantData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantData, true) . '\' is not an object');
            }
            $value = new DisputeMerchantData();
            $this->merchantData = $value->fromObject($object->merchantData);
        }
        if (property_exists($object, 'originalDisputeAmount')) {
            if (!is_object($object->originalDisputeAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->originalDisputeAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->originalDisputeAmount = $value->fromObject($object->originalDisputeAmount);
        }
        if (property_exists($object, 'originalTransactionData')) {
            if (!is_object($object->originalTransactionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->originalTransactionData, true) . '\' is not an object');
            }
            $value = new OriginalTransactionData();
            $this->originalTransactionData = $value->fromObject($object->originalTransactionData);
        }
        if (property_exists($object, 'schemeReason')) {
            $this->schemeReason = $object->schemeReason;
        }
        if (property_exists($object, 'schemeReasonDescription')) {
            $this->schemeReasonDescription = $object->schemeReasonDescription;
        }
        if (property_exists($object, 'unifiedCategory')) {
            $this->unifiedCategory = $object->unifiedCategory;
        }
        if (property_exists($object, 'unifiedReason')) {
            $this->unifiedReason = $object->unifiedReason;
        }
        return $this;
    }
}
