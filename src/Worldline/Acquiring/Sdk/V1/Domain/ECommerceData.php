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
class ECommerceData extends DataObject
{
    /**
     * @var AddressVerificationData|null
     */
    public ?AddressVerificationData $addressVerificationData = null;

    /**
     * @var string|null
     */
    public ?string $scaExemptionRequest = null;

    /**
     * @var ThreeDSecure|null
     */
    public ?ThreeDSecure $threeDSecure = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->addressVerificationData)) {
            $object->addressVerificationData = $this->addressVerificationData->toObject();
        }
        if (!is_null($this->scaExemptionRequest)) {
            $object->scaExemptionRequest = $this->scaExemptionRequest;
        }
        if (!is_null($this->threeDSecure)) {
            $object->threeDSecure = $this->threeDSecure->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ECommerceData
    {
        parent::fromObject($object);
        if (property_exists($object, 'addressVerificationData')) {
            if (!is_object($object->addressVerificationData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->addressVerificationData, true) . '\' is not an object');
            }
            $value = new AddressVerificationData();
            $this->addressVerificationData = $value->fromObject($object->addressVerificationData);
        }
        if (property_exists($object, 'scaExemptionRequest')) {
            $this->scaExemptionRequest = $object->scaExemptionRequest;
        }
        if (property_exists($object, 'threeDSecure')) {
            if (!is_object($object->threeDSecure)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecure, true) . '\' is not an object');
            }
            $value = new ThreeDSecure();
            $this->threeDSecure = $value->fromObject($object->threeDSecure);
        }
        return $this;
    }
}
