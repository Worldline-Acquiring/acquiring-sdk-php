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
class DisputeSummary extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acquirerDisputeReference = null;

    /**
     * @var DisputeMerchantDataBase|null
     */
    public ?DisputeMerchantDataBase $merchantData = null;

    /**
     * @var OriginalTransactionSummaryData|null
     */
    public ?OriginalTransactionSummaryData $originalTransactionData = null;

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
        if (!is_null($this->acquirerDisputeReference)) {
            $object->acquirerDisputeReference = $this->acquirerDisputeReference;
        }
        if (!is_null($this->merchantData)) {
            $object->merchantData = $this->merchantData->toObject();
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
    public function fromObject(object $object): DisputeSummary
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerDisputeReference')) {
            $this->acquirerDisputeReference = $object->acquirerDisputeReference;
        }
        if (property_exists($object, 'merchantData')) {
            if (!is_object($object->merchantData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantData, true) . '\' is not an object');
            }
            $value = new DisputeMerchantDataBase();
            $this->merchantData = $value->fromObject($object->merchantData);
        }
        if (property_exists($object, 'originalTransactionData')) {
            if (!is_object($object->originalTransactionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->originalTransactionData, true) . '\' is not an object');
            }
            $value = new OriginalTransactionSummaryData();
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
