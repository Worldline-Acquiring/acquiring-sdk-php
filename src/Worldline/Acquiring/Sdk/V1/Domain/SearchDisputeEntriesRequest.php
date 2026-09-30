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
class SearchDisputeEntriesRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $disputeId = null;

    /**
     * @var string[]|null
     */
    public ?array $entryCategories = null;

    /**
     * @var DateTimeRange|null
     */
    public ?DateTimeRange $entryDateTime = null;

    /**
     * @var string|null
     */
    public ?string $entryId = null;

    /**
     * @var string[]|null
     */
    public ?array $entryTypes = null;

    /**
     * @var bool|null
     */
    public ?bool $includeDisputeSummary = null;

    /**
     * @var MerchantScope|null
     */
    public ?MerchantScope $merchantScope = null;

    /**
     * @var PaginationRequest|null
     */
    public ?PaginationRequest $pagination = null;

    /**
     * @var string|null
     */
    public ?string $sortOrder = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->disputeId)) {
            $object->disputeId = $this->disputeId;
        }
        if (!is_null($this->entryCategories)) {
            $object->entryCategories = [];
            foreach ($this->entryCategories as $element) {
                if (!is_null($element)) {
                    $object->entryCategories[] = $element;
                }
            }
        }
        if (!is_null($this->entryDateTime)) {
            $object->entryDateTime = $this->entryDateTime->toObject();
        }
        if (!is_null($this->entryId)) {
            $object->entryId = $this->entryId;
        }
        if (!is_null($this->entryTypes)) {
            $object->entryTypes = [];
            foreach ($this->entryTypes as $element) {
                if (!is_null($element)) {
                    $object->entryTypes[] = $element;
                }
            }
        }
        if (!is_null($this->includeDisputeSummary)) {
            $object->includeDisputeSummary = $this->includeDisputeSummary;
        }
        if (!is_null($this->merchantScope)) {
            $object->merchantScope = $this->merchantScope->toObject();
        }
        if (!is_null($this->pagination)) {
            $object->pagination = $this->pagination->toObject();
        }
        if (!is_null($this->sortOrder)) {
            $object->sortOrder = $this->sortOrder;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SearchDisputeEntriesRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'disputeId')) {
            $this->disputeId = $object->disputeId;
        }
        if (property_exists($object, 'entryCategories')) {
            if (!is_array($object->entryCategories) && !is_object($object->entryCategories)) {
                throw new UnexpectedValueException('value \'' . print_r($object->entryCategories, true) . '\' is not an array or object');
            }
            $this->entryCategories = [];
            foreach ($object->entryCategories as $element) {
                $this->entryCategories[] = $element;
            }
        }
        if (property_exists($object, 'entryDateTime')) {
            if (!is_object($object->entryDateTime)) {
                throw new UnexpectedValueException('value \'' . print_r($object->entryDateTime, true) . '\' is not an object');
            }
            $value = new DateTimeRange();
            $this->entryDateTime = $value->fromObject($object->entryDateTime);
        }
        if (property_exists($object, 'entryId')) {
            $this->entryId = $object->entryId;
        }
        if (property_exists($object, 'entryTypes')) {
            if (!is_array($object->entryTypes) && !is_object($object->entryTypes)) {
                throw new UnexpectedValueException('value \'' . print_r($object->entryTypes, true) . '\' is not an array or object');
            }
            $this->entryTypes = [];
            foreach ($object->entryTypes as $element) {
                $this->entryTypes[] = $element;
            }
        }
        if (property_exists($object, 'includeDisputeSummary')) {
            $this->includeDisputeSummary = $object->includeDisputeSummary;
        }
        if (property_exists($object, 'merchantScope')) {
            if (!is_object($object->merchantScope)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantScope, true) . '\' is not an object');
            }
            $value = new MerchantScope();
            $this->merchantScope = $value->fromObject($object->merchantScope);
        }
        if (property_exists($object, 'pagination')) {
            if (!is_object($object->pagination)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pagination, true) . '\' is not an object');
            }
            $value = new PaginationRequest();
            $this->pagination = $value->fromObject($object->pagination);
        }
        if (property_exists($object, 'sortOrder')) {
            $this->sortOrder = $object->sortOrder;
        }
        return $this;
    }
}
