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
class DisputeDateTimeData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $closedDateTime = null;

    /**
     * @var string|null
     */
    public ?string $lastStatusChangedDateTime = null;

    /**
     * @var string|null
     */
    public ?string $openedDateTime = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $responseDueDate = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->closedDateTime)) {
            $object->closedDateTime = $this->closedDateTime;
        }
        if (!is_null($this->lastStatusChangedDateTime)) {
            $object->lastStatusChangedDateTime = $this->lastStatusChangedDateTime;
        }
        if (!is_null($this->openedDateTime)) {
            $object->openedDateTime = $this->openedDateTime;
        }
        if (!is_null($this->responseDueDate)) {
            $object->responseDueDate = $this->responseDueDate->format('Y-m-d');
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeDateTimeData
    {
        parent::fromObject($object);
        if (property_exists($object, 'closedDateTime')) {
            $this->closedDateTime = $object->closedDateTime;
        }
        if (property_exists($object, 'lastStatusChangedDateTime')) {
            $this->lastStatusChangedDateTime = $object->lastStatusChangedDateTime;
        }
        if (property_exists($object, 'openedDateTime')) {
            $this->openedDateTime = $object->openedDateTime;
        }
        if (property_exists($object, 'responseDueDate')) {
            $this->responseDueDate = new DateTime($object->responseDueDate);
        }
        return $this;
    }
}
