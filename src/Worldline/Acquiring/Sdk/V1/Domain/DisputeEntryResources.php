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
class DisputeEntryResources extends DataObject
{
    /**
     * @var DisputeEntryWithDisputeSummary[]|null
     */
    public ?array $disputeEntries = null;

    /**
     * @var PaginationResponse|null
     */
    public ?PaginationResponse $pagination = null;

    /**
     * @var string|null
     */
    public ?string $requestId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->disputeEntries)) {
            $object->disputeEntries = [];
            foreach ($this->disputeEntries as $element) {
                if (!is_null($element)) {
                    $object->disputeEntries[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->pagination)) {
            $object->pagination = $this->pagination->toObject();
        }
        if (!is_null($this->requestId)) {
            $object->requestId = $this->requestId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeEntryResources
    {
        parent::fromObject($object);
        if (property_exists($object, 'disputeEntries')) {
            if (!is_array($object->disputeEntries) && !is_object($object->disputeEntries)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputeEntries, true) . '\' is not an array or object');
            }
            $this->disputeEntries = [];
            foreach ($object->disputeEntries as $element) {
                $value = new DisputeEntryWithDisputeSummary();
                $this->disputeEntries[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'pagination')) {
            if (!is_object($object->pagination)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pagination, true) . '\' is not an object');
            }
            $value = new PaginationResponse();
            $this->pagination = $value->fromObject($object->pagination);
        }
        if (property_exists($object, 'requestId')) {
            $this->requestId = $object->requestId;
        }
        return $this;
    }
}
