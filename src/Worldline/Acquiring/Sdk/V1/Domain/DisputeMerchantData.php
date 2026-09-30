<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class DisputeMerchantData extends DisputeMerchantDataBase
{
    /**
     * @var int|null
     */
    public ?int $merchantCategoryCode = null;

    /**
     * @var string|null
     */
    public ?string $merchantCity = null;

    /**
     * @var string|null
     */
    public ?string $merchantCountryCode = null;

    /**
     * @var string|null
     */
    public ?string $merchantName = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->merchantCategoryCode)) {
            $object->merchantCategoryCode = $this->merchantCategoryCode;
        }
        if (!is_null($this->merchantCity)) {
            $object->merchantCity = $this->merchantCity;
        }
        if (!is_null($this->merchantCountryCode)) {
            $object->merchantCountryCode = $this->merchantCountryCode;
        }
        if (!is_null($this->merchantName)) {
            $object->merchantName = $this->merchantName;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeMerchantData
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantCategoryCode')) {
            $this->merchantCategoryCode = $object->merchantCategoryCode;
        }
        if (property_exists($object, 'merchantCity')) {
            $this->merchantCity = $object->merchantCity;
        }
        if (property_exists($object, 'merchantCountryCode')) {
            $this->merchantCountryCode = $object->merchantCountryCode;
        }
        if (property_exists($object, 'merchantName')) {
            $this->merchantName = $object->merchantName;
        }
        return $this;
    }
}
