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
class MarketplaceData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $retailerCountryCode = null;

    /**
     * @var string|null
     */
    public ?string $retailerName = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->retailerCountryCode)) {
            $object->retailerCountryCode = $this->retailerCountryCode;
        }
        if (!is_null($this->retailerName)) {
            $object->retailerName = $this->retailerName;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MarketplaceData
    {
        parent::fromObject($object);
        if (property_exists($object, 'retailerCountryCode')) {
            $this->retailerCountryCode = $object->retailerCountryCode;
        }
        if (property_exists($object, 'retailerName')) {
            $this->retailerName = $object->retailerName;
        }
        return $this;
    }
}
