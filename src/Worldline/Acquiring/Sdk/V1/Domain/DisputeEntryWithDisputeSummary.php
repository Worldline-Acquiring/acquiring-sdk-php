<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class DisputeEntryWithDisputeSummary extends DisputeEntry
{
    /**
     * @var string|null
     */
    public ?string $disputeId = null;

    /**
     * @var DisputeSummary|null
     */
    public ?DisputeSummary $disputeSummary = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->disputeId)) {
            $object->disputeId = $this->disputeId;
        }
        if (!is_null($this->disputeSummary)) {
            $object->disputeSummary = $this->disputeSummary->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeEntryWithDisputeSummary
    {
        parent::fromObject($object);
        if (property_exists($object, 'disputeId')) {
            $this->disputeId = $object->disputeId;
        }
        if (property_exists($object, 'disputeSummary')) {
            if (!is_object($object->disputeSummary)) {
                throw new UnexpectedValueException('value \'' . print_r($object->disputeSummary, true) . '\' is not an object');
            }
            $value = new DisputeSummary();
            $this->disputeSummary = $value->fromObject($object->disputeSummary);
        }
        return $this;
    }
}
