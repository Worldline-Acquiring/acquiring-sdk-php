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
class DateRange extends DataObject
{
    /**
     * @var DateTime|null
     */
    public ?DateTime $greaterEqual = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $lowerEqual = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->greaterEqual)) {
            $object->greaterEqual = $this->greaterEqual->format('Y-m-d');
        }
        if (!is_null($this->lowerEqual)) {
            $object->lowerEqual = $this->lowerEqual->format('Y-m-d');
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DateRange
    {
        parent::fromObject($object);
        if (property_exists($object, 'greaterEqual')) {
            $this->greaterEqual = new DateTime($object->greaterEqual);
        }
        if (property_exists($object, 'lowerEqual')) {
            $this->lowerEqual = new DateTime($object->lowerEqual);
        }
        return $this;
    }
}
