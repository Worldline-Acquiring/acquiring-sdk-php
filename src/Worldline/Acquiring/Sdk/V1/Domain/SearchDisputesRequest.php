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
class SearchDisputesRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acquirerDisputeReference = null;

    /**
     * @var string|null
     */
    public ?string $acquirerReferenceNumber = null;

    /**
     * @var DateTimeRange|null
     */
    public ?DateTimeRange $closedDateTime = null;

    /**
     * @var string|null
     */
    public ?string $disputeId = null;

    /**
     * @var string[]|null
     */
    public ?array $disputeStages = null;

    /**
     * @var string[]|null
     */
    public ?array $disputeStatusCategories = null;

    /**
     * @var bool|null
     */
    public ?bool $isOpen = null;

    /**
     * @var DateTimeRange|null
     */
    public ?DateTimeRange $lastStatusChangedDateTime = null;

    /**
     * @var string|null
     */
    public ?string $merchantReference = null;

    /**
     * @var MerchantScope|null
     */
    public ?MerchantScope $merchantScope = null;

    /**
     * @var DateTimeRange|null
     */
    public ?DateTimeRange $openedDateTime = null;

    /**
     * @var PaginationRequest|null
     */
    public ?PaginationRequest $pagination = null;

    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @var DateRange|null
     */
    public ?DateRange $responseDueDate = null;

    /**
     * @var string[]|null
     */
    public ?array $schemes = null;

    /**
     * @var string|null
     */
    public ?string $sortBy = null;

    /**
     * @var string|null
     */
    public ?string $sortOrder = null;

    /**
     * @var string[]|null
     */
    public ?array $unifiedCategories = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerDisputeReference)) {
            $object->acquirerDisputeReference = $this->acquirerDisputeReference;
        }
        if (!is_null($this->acquirerReferenceNumber)) {
            $object->acquirerReferenceNumber = $this->acquirerReferenceNumber;
        }
        if (!is_null($this->closedDateTime)) {
            $object->closedDateTime = $this->closedDateTime->toObject();
        }
        if (!is_null($this->disputeId)) {
            $object->disputeId = $this->disputeId;
        }
        if (!is_null($this->disputeStages)) {
            $object->disputeStages = [];
            foreach ($this->disputeStages as $element) {
                if (!is_null($element)) {
                    $object->disputeStages[] = $element;
                }
            }
        }
        if (!is_null($this->disputeStatusCategories)) {
            $object->disputeStatusCategories = [];
            foreach ($this->disputeStatusCategories as $element) {
                if (!is_null($element)) {
                    $object->disputeStatusCategories[] = $element;
                }
            }
        }
        if (!is_null($this->isOpen)) {
            $object->isOpen = $this->isOpen;
        }
        if (!is_null($this->lastStatusChangedDateTime)) {
            $object->lastStatusChangedDateTime = $this->lastStatusChangedDateTime->toObject();
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->merchantScope)) {
            $object->merchantScope = $this->merchantScope->toObject();
        }
        if (!is_null($this->openedDateTime)) {
            $object->openedDateTime = $this->openedDateTime->toObject();
        }
        if (!is_null($this->pagination)) {
            $object->pagination = $this->pagination->toObject();
        }
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        if (!is_null($this->responseDueDate)) {
            $object->responseDueDate = $this->responseDueDate->toObject();
        }
        if (!is_null($this->schemes)) {
            $object->schemes = [];
            foreach ($this->schemes as $element) {
                if (!is_null($element)) {
                    $object->schemes[] = $element;
                }
            }
        }
        if (!is_null($this->sortBy)) {
            $object->sortBy = $this->sortBy;
        }
        if (!is_null($this->sortOrder)) {
            $object->sortOrder = $this->sortOrder;
        }
        if (!is_null($this->unifiedCategories)) {
            $object->unifiedCategories = [];
            foreach ($this->unifiedCategories as $element) {
                if (!is_null($element)) {
                    $object->unifiedCategories[] = $element;
                }
            }
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SearchDisputesRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerDisputeReference')) {
            $this->acquirerDisputeReference = $object->acquirerDisputeReference;
        }
        if (property_exists($object, 'acquirerReferenceNumber')) {
            $this->acquirerReferenceNumber = $object->acquirerReferenceNumber;
        }
        if (property_exists($object, 'closedDateTime')) {
            if (!is_object($object->closedDateTime)) {
                throw new UnexpectedValueException('value \'' . print_r($object->closedDateTime, true) . '\' is not an object');
            }
            $value = new DateTimeRange();
            $this->closedDateTime = $value->fromObject($object->closedDateTime);
        }
        if (property_exists($object, 'disputeId')) {
            $this->disputeId = $object->disputeId;
        }
        if (property_exists($object, 'disputeStages')) {
            if (!is_array($object->disputeStages) && !is_object($object->disputeStages)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputeStages, true) . '\' is not an array or object');
            }
            $this->disputeStages = [];
            foreach ($object->disputeStages as $element) {
                $this->disputeStages[] = $element;
            }
        }
        if (property_exists($object, 'disputeStatusCategories')) {
            if (!is_array($object->disputeStatusCategories) && !is_object($object->disputeStatusCategories)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputeStatusCategories, true) . '\' is not an array or object');
            }
            $this->disputeStatusCategories = [];
            foreach ($object->disputeStatusCategories as $element) {
                $this->disputeStatusCategories[] = $element;
            }
        }
        if (property_exists($object, 'isOpen')) {
            $this->isOpen = $object->isOpen;
        }
        if (property_exists($object, 'lastStatusChangedDateTime')) {
            if (!is_object($object->lastStatusChangedDateTime)) {
                throw new UnexpectedValueException('value \'' . print_r($object->lastStatusChangedDateTime, true) . '\' is not an object');
            }
            $value = new DateTimeRange();
            $this->lastStatusChangedDateTime = $value->fromObject($object->lastStatusChangedDateTime);
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'merchantScope')) {
            if (!is_object($object->merchantScope)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantScope, true) . '\' is not an object');
            }
            $value = new MerchantScope();
            $this->merchantScope = $value->fromObject($object->merchantScope);
        }
        if (property_exists($object, 'openedDateTime')) {
            if (!is_object($object->openedDateTime)) {
                throw new UnexpectedValueException('value \'' . print_r($object->openedDateTime, true) . '\' is not an object');
            }
            $value = new DateTimeRange();
            $this->openedDateTime = $value->fromObject($object->openedDateTime);
        }
        if (property_exists($object, 'pagination')) {
            if (!is_object($object->pagination)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pagination, true) . '\' is not an object');
            }
            $value = new PaginationRequest();
            $this->pagination = $value->fromObject($object->pagination);
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'responseDueDate')) {
            if (!is_object($object->responseDueDate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->responseDueDate, true) . '\' is not an object');
            }
            $value = new DateRange();
            $this->responseDueDate = $value->fromObject($object->responseDueDate);
        }
        if (property_exists($object, 'schemes')) {
            if (!is_array($object->schemes) && !is_object($object->schemes)) {
                throw new UnexpectedValueException('value \'' . print_r($object->schemes, true) . '\' is not an array or object');
            }
            $this->schemes = [];
            foreach ($object->schemes as $element) {
                $this->schemes[] = $element;
            }
        }
        if (property_exists($object, 'sortBy')) {
            $this->sortBy = $object->sortBy;
        }
        if (property_exists($object, 'sortOrder')) {
            $this->sortOrder = $object->sortOrder;
        }
        if (property_exists($object, 'unifiedCategories')) {
            if (!is_array($object->unifiedCategories) && !is_object($object->unifiedCategories)) {
                throw new UnexpectedValueException('value \'' . print_r($object->unifiedCategories, true) . '\' is not an array or object');
            }
            $this->unifiedCategories = [];
            foreach ($object->unifiedCategories as $element) {
                $this->unifiedCategories[] = $element;
            }
        }
        return $this;
    }
}
