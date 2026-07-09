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
class ThreeDSecure extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $authenticationValue = null;

    /**
     * @var string|null
     */
    public ?string $directoryServerTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $eci = null;

    /**
     * @var string|null
     */
    public ?string $threeDSecureType = null;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->authenticationValue)) {
            $object->authenticationValue = $this->authenticationValue;
        }
        if (!is_null($this->directoryServerTransactionId)) {
            $object->directoryServerTransactionId = $this->directoryServerTransactionId;
        }
        if (!is_null($this->eci)) {
            $object->eci = $this->eci;
        }
        if (!is_null($this->threeDSecureType)) {
            $object->threeDSecureType = $this->threeDSecureType;
        }
        if (!is_null($this->version)) {
            $object->version = $this->version;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ThreeDSecure
    {
        parent::fromObject($object);
        if (property_exists($object, 'authenticationValue')) {
            $this->authenticationValue = $object->authenticationValue;
        }
        if (property_exists($object, 'directoryServerTransactionId')) {
            $this->directoryServerTransactionId = $object->directoryServerTransactionId;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'threeDSecureType')) {
            $this->threeDSecureType = $object->threeDSecureType;
        }
        if (property_exists($object, 'version')) {
            $this->version = $object->version;
        }
        return $this;
    }
}
