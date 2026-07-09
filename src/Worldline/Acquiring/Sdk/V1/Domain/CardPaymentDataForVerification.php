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
class CardPaymentDataForVerification extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $brand = null;

    /**
     * @var string|null
     */
    public ?string $brandSelector = null;

    /**
     * @var PlainCardData|null
     */
    public ?PlainCardData $cardData = null;

    /**
     * @var string|null
     */
    public ?string $cardEntryMode = null;

    /**
     * @var CardOnFileData|null
     */
    public ?CardOnFileData $cardOnFileData = null;

    /**
     * @var string|null
     */
    public ?string $cardholderVerificationMethod = null;

    /**
     * @var ECommerceDataForAccountVerification|null
     */
    public ?ECommerceDataForAccountVerification $ecommerceData = null;

    /**
     * @var NetworkTokenData|null
     */
    public ?NetworkTokenData $networkTokenData = null;

    /**
     * @var PointOfSaleData|null
     */
    public ?PointOfSaleData $pointOfSaleData = null;

    /**
     * @var string|null
     */
    public ?string $walletId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->brand)) {
            $object->brand = $this->brand;
        }
        if (!is_null($this->brandSelector)) {
            $object->brandSelector = $this->brandSelector;
        }
        if (!is_null($this->cardData)) {
            $object->cardData = $this->cardData->toObject();
        }
        if (!is_null($this->cardEntryMode)) {
            $object->cardEntryMode = $this->cardEntryMode;
        }
        if (!is_null($this->cardOnFileData)) {
            $object->cardOnFileData = $this->cardOnFileData->toObject();
        }
        if (!is_null($this->cardholderVerificationMethod)) {
            $object->cardholderVerificationMethod = $this->cardholderVerificationMethod;
        }
        if (!is_null($this->ecommerceData)) {
            $object->ecommerceData = $this->ecommerceData->toObject();
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardPaymentDataForVerification
    {
        parent::fromObject($object);
        if (property_exists($object, 'brand')) {
            $this->brand = $object->brand;
        }
        if (property_exists($object, 'brandSelector')) {
            $this->brandSelector = $object->brandSelector;
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
        if (property_exists($object, 'cardOnFileData')) {
            if (!is_object($object->cardOnFileData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardOnFileData, true) . '\' is not an object');
            }
            $value = new CardOnFileData();
            $this->cardOnFileData = $value->fromObject($object->cardOnFileData);
        }
        if (property_exists($object, 'cardholderVerificationMethod')) {
            $this->cardholderVerificationMethod = $object->cardholderVerificationMethod;
        }
        if (property_exists($object, 'ecommerceData')) {
            if (!is_object($object->ecommerceData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->ecommerceData, true) . '\' is not an object');
            }
            $value = new ECommerceDataForAccountVerification();
            $this->ecommerceData = $value->fromObject($object->ecommerceData);
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
