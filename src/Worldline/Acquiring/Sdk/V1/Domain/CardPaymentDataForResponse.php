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
class CardPaymentDataForResponse extends DataObject
{
    /**
     * @var string
     */
    public $brand = null;

    /**
     * @var ECommerceDataForResponse
     */
    public $ecommerceData = null;

    /**
     * @var PointOfSaleData
     */
    public $pointOfSaleData = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->brand)) {
            $object->brand = $this->brand;
        }
        if (!is_null($this->ecommerceData)) {
            $object->ecommerceData = $this->ecommerceData->toObject();
        }
        if (!is_null($this->pointOfSaleData)) {
            $object->pointOfSaleData = $this->pointOfSaleData->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'brand')) {
            $this->brand = $object->brand;
        }
        if (property_exists($object, 'ecommerceData')) {
            if (!is_object($object->ecommerceData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->ecommerceData, true) . '\' is not an object');
            }
            $value = new ECommerceDataForResponse();
            $this->ecommerceData = $value->fromObject($object->ecommerceData);
        }
        if (property_exists($object, 'pointOfSaleData')) {
            if (!is_object($object->pointOfSaleData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pointOfSaleData, true) . '\' is not an object');
            }
            $value = new PointOfSaleData();
            $this->pointOfSaleData = $value->fromObject($object->pointOfSaleData);
        }
        return $this;
    }
}
