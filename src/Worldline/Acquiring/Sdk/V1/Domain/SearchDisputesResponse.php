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
class SearchDisputesResponse extends DataObject
{
    /**
     * @var DisputeCase[]|null
     */
    public ?array $disputes = null;

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
        if (!is_null($this->disputes)) {
            $object->disputes = [];
            foreach ($this->disputes as $element) {
                if (!is_null($element)) {
                    $object->disputes[] = $element->toObject();
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
    public function fromObject(object $object): SearchDisputesResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'disputes')) {
            if (!is_array($object->disputes) && !is_object($object->disputes)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputes, true) . '\' is not an array or object');
            }
            $this->disputes = [];
            foreach ($object->disputes as $element) {
                $value = new DisputeCase();
                $this->disputes[] = $value->fromObject($element);
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
