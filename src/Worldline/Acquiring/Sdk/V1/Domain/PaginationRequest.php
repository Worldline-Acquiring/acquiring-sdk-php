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
class PaginationRequest extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $fromIndex = null;

    /**
     * @var int|null
     */
    public ?int $pageSize = null;

    /**
     * @var string|null
     */
    public ?string $searchId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->fromIndex)) {
            $object->fromIndex = $this->fromIndex;
        }
        if (!is_null($this->pageSize)) {
            $object->pageSize = $this->pageSize;
        }
        if (!is_null($this->searchId)) {
            $object->searchId = $this->searchId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaginationRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'fromIndex')) {
            $this->fromIndex = $object->fromIndex;
        }
        if (property_exists($object, 'pageSize')) {
            $this->pageSize = $object->pageSize;
        }
        if (property_exists($object, 'searchId')) {
            $this->searchId = $object->searchId;
        }
        return $this;
    }
}
