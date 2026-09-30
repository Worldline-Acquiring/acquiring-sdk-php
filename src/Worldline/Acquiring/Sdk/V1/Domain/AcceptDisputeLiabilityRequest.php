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
class AcceptDisputeLiabilityRequest extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $includeEntries = null;

    /**
     * @var string|null
     */
    public ?string $messageText = null;

    /**
     * @var string|null
     */
    public ?string $userId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->includeEntries)) {
            $object->includeEntries = $this->includeEntries;
        }
        if (!is_null($this->messageText)) {
            $object->messageText = $this->messageText;
        }
        if (!is_null($this->userId)) {
            $object->userId = $this->userId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AcceptDisputeLiabilityRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'includeEntries')) {
            $this->includeEntries = $object->includeEntries;
        }
        if (property_exists($object, 'messageText')) {
            $this->messageText = $object->messageText;
        }
        if (property_exists($object, 'userId')) {
            $this->userId = $object->userId;
        }
        return $this;
    }
}
