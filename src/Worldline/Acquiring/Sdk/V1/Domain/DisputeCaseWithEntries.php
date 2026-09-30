<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class DisputeCaseWithEntries extends DisputeCase
{
    /**
     * @var DisputeEntry[]|null
     */
    public ?array $entries = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->entries)) {
            $object->entries = [];
            foreach ($this->entries as $element) {
                if (!is_null($element)) {
                    $object->entries[] = $element->toObject();
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
    public function fromObject(object $object): DisputeCaseWithEntries
    {
        parent::fromObject($object);
        if (property_exists($object, 'entries')) {
            if (!is_array($object->entries) && !is_object($object->entries)) {
                throw new UnexpectedValueException('value \'' . print_r($object->entries, true) . '\' is not an array or object');
            }
            $this->entries = [];
            foreach ($object->entries as $element) {
                $value = new DisputeEntry();
                $this->entries[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
