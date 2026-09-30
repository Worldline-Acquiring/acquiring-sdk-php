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
class MerchantData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $countryCode = null;

    /**
     * @var CustomerServiceData|null
     */
    public ?CustomerServiceData $customerServiceData = null;

    /**
     * @var int|null
     */
    public ?int $merchantCategoryCode = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $paymentFacilitatorId = null;

    /**
     * @var string|null
     */
    public ?string $postalCode = null;

    /**
     * @var string|null
     */
    public ?string $stateCode = null;

    /**
     * @var string|null
     */
    public ?string $subMerchantId = null;

    /**
     * @var string|null
     */
    public ?string $taxId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address;
        }
        if (!is_null($this->city)) {
            $object->city = $this->city;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->customerServiceData)) {
            $object->customerServiceData = $this->customerServiceData->toObject();
        }
        if (!is_null($this->merchantCategoryCode)) {
            $object->merchantCategoryCode = $this->merchantCategoryCode;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
        }
        if (!is_null($this->paymentFacilitatorId)) {
            $object->paymentFacilitatorId = $this->paymentFacilitatorId;
        }
        if (!is_null($this->postalCode)) {
            $object->postalCode = $this->postalCode;
        }
        if (!is_null($this->stateCode)) {
            $object->stateCode = $this->stateCode;
        }
        if (!is_null($this->subMerchantId)) {
            $object->subMerchantId = $this->subMerchantId;
        }
        if (!is_null($this->taxId)) {
            $object->taxId = $this->taxId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MerchantData
    {
        parent::fromObject($object);
        if (property_exists($object, 'address')) {
            $this->address = $object->address;
        }
        if (property_exists($object, 'city')) {
            $this->city = $object->city;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'customerServiceData')) {
            if (!is_object($object->customerServiceData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerServiceData, true) . '\' is not an object');
            }
            $value = new CustomerServiceData();
            $this->customerServiceData = $value->fromObject($object->customerServiceData);
        }
        if (property_exists($object, 'merchantCategoryCode')) {
            $this->merchantCategoryCode = $object->merchantCategoryCode;
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        if (property_exists($object, 'paymentFacilitatorId')) {
            $this->paymentFacilitatorId = $object->paymentFacilitatorId;
        }
        if (property_exists($object, 'postalCode')) {
            $this->postalCode = $object->postalCode;
        }
        if (property_exists($object, 'stateCode')) {
            $this->stateCode = $object->stateCode;
        }
        if (property_exists($object, 'subMerchantId')) {
            $this->subMerchantId = $object->subMerchantId;
        }
        if (property_exists($object, 'taxId')) {
            $this->taxId = $object->taxId;
        }
        return $this;
    }
}
