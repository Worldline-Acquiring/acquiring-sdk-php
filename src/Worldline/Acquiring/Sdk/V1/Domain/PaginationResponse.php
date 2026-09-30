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
class PaginationResponse extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $lastIndex = null;

    /**
     * @var string|null
     */
    public ?string $searchId = null;

    /**
     * @var int|null
     */
    public ?int $totalCount = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->lastIndex)) {
            $object->lastIndex = $this->lastIndex;
        }
        if (!is_null($this->searchId)) {
            $object->searchId = $this->searchId;
        }
        if (!is_null($this->totalCount)) {
            $object->totalCount = $this->totalCount;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaginationResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'lastIndex')) {
            $this->lastIndex = $object->lastIndex;
        }
        if (property_exists($object, 'searchId')) {
            $this->searchId = $object->searchId;
        }
        if (property_exists($object, 'totalCount')) {
            $this->totalCount = $object->totalCount;
        }
        return $this;
    }
}
