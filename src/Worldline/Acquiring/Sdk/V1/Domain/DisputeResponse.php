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
class DisputeResponse extends DataObject
{
    /**
     * @var DisputeCaseWithEntries|null
     */
    public ?DisputeCaseWithEntries $dispute = null;

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
        if (!is_null($this->dispute)) {
            $object->dispute = $this->dispute->toObject();
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
    public function fromObject(object $object): DisputeResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'dispute')) {
            if (!is_object($object->dispute)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dispute, true) . '\' is not an object');
            }
            $value = new DisputeCaseWithEntries();
            $this->dispute = $value->fromObject($object->dispute);
        }
        if (property_exists($object, 'requestId')) {
            $this->requestId = $object->requestId;
        }
        return $this;
    }
}
