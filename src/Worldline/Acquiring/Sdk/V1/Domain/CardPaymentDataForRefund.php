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
class CardPaymentDataForRefund extends DataObject
{
    /**
     * @var string
     */
    public $brand = null;

    /**
     * @var bool
     */
    public $captureImmediately = null;

    /**
     * @var PlainCardData
     */
    public $cardData = null;

    /**
     * @var string
     */
    public $cardEntryMode = null;

    /**
     * @var NetworkTokenData
     */
    public $networkTokenData = null;

    /**
     * @var PointOfSaleData
     */
    public $pointOfSaleData = null;

    /**
     * @var string
     */
    public $walletId = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->brand)) {
            $object->brand = $this->brand;
        }
        if (!is_null($this->captureImmediately)) {
            $object->captureImmediately = $this->captureImmediately;
        }
        if (!is_null($this->cardData)) {
            $object->cardData = $this->cardData->toObject();
        }
        if (!is_null($this->cardEntryMode)) {
            $object->cardEntryMode = $this->cardEntryMode;
        }
        if (!is_null($this->networkTokenData)) {
            $object->networkTokenData = $this->networkTokenData->toObject();
        }
        if (!is_null($this->pointOfSaleData)) {
            $object->pointOfSaleData = $this->pointOfSaleData->toObject();
        }
        if (!is_null($this->walletId)) {
            $object->walletId = $this->walletId;
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
        if (property_exists($object, 'captureImmediately')) {
            $this->captureImmediately = $object->captureImmediately;
        }
        if (property_exists($object, 'cardData')) {
            if (!is_object($object->cardData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardData, true) . '\' is not an object');
            }
            $value = new PlainCardData();
            $this->cardData = $value->fromObject($object->cardData);
        }
        if (property_exists($object, 'cardEntryMode')) {
            $this->cardEntryMode = $object->cardEntryMode;
        }
        if (property_exists($object, 'networkTokenData')) {
            if (!is_object($object->networkTokenData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->networkTokenData, true) . '\' is not an object');
            }
            $value = new NetworkTokenData();
            $this->networkTokenData = $value->fromObject($object->networkTokenData);
        }
        if (property_exists($object, 'pointOfSaleData')) {
            if (!is_object($object->pointOfSaleData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pointOfSaleData, true) . '\' is not an object');
            }
            $value = new PointOfSaleData();
            $this->pointOfSaleData = $value->fromObject($object->pointOfSaleData);
        }
        if (property_exists($object, 'walletId')) {
            $this->walletId = $object->walletId;
        }
        return $this;
    }
}
