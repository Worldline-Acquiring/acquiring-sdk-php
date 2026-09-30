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
class CustomerServiceData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $customerServiceEmail = null;

    /**
     * @var string|null
     */
    public ?string $customerServicePhoneNumber = null;

    /**
     * @var string|null
     */
    public ?string $customerServiceUrl = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->customerServiceEmail)) {
            $object->customerServiceEmail = $this->customerServiceEmail;
        }
        if (!is_null($this->customerServicePhoneNumber)) {
            $object->customerServicePhoneNumber = $this->customerServicePhoneNumber;
        }
        if (!is_null($this->customerServiceUrl)) {
            $object->customerServiceUrl = $this->customerServiceUrl;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CustomerServiceData
    {
        parent::fromObject($object);
        if (property_exists($object, 'customerServiceEmail')) {
            $this->customerServiceEmail = $object->customerServiceEmail;
        }
        if (property_exists($object, 'customerServicePhoneNumber')) {
            $this->customerServicePhoneNumber = $object->customerServicePhoneNumber;
        }
        if (property_exists($object, 'customerServiceUrl')) {
            $this->customerServiceUrl = $object->customerServiceUrl;
        }
        return $this;
    }
}
