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
class DateTimeRange extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $greater = null;

    /**
     * @var string|null
     */
    public ?string $greaterEqual = null;

    /**
     * @var string|null
     */
    public ?string $lower = null;

    /**
     * @var string|null
     */
    public ?string $lowerEqual = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->greater)) {
            $object->greater = $this->greater;
        }
        if (!is_null($this->greaterEqual)) {
            $object->greaterEqual = $this->greaterEqual;
        }
        if (!is_null($this->lower)) {
            $object->lower = $this->lower;
        }
        if (!is_null($this->lowerEqual)) {
            $object->lowerEqual = $this->lowerEqual;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DateTimeRange
    {
        parent::fromObject($object);
        if (property_exists($object, 'greater')) {
            $this->greater = $object->greater;
        }
        if (property_exists($object, 'greaterEqual')) {
            $this->greaterEqual = $object->greaterEqual;
        }
        if (property_exists($object, 'lower')) {
            $this->lower = $object->lower;
        }
        if (property_exists($object, 'lowerEqual')) {
            $this->lowerEqual = $object->lowerEqual;
        }
        return $this;
    }
}
