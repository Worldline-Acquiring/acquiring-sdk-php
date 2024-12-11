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
class PointOfSaleData extends DataObject
{
    /**
     * @var EmvDataItem[]
     */
    public $emvData = null;

    /**
     * @var string
     */
    public $encryptedPinBlock = null;

    /**
     * @var bool
     */
    public $isResponseToPinRequest = null;

    /**
     * @var bool
     */
    public $isRetryWithTheSameOperationId = null;

    /**
     * @var string
     */
    public $pinMasterKeyReference = null;

    /**
     * @var string
     */
    public $track2Data = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->emvData)) {
            $object->emvData = [];
            foreach ($this->emvData as $element) {
                if (!is_null($element)) {
                    $object->emvData[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->encryptedPinBlock)) {
            $object->encryptedPinBlock = $this->encryptedPinBlock;
        }
        if (!is_null($this->isResponseToPinRequest)) {
            $object->isResponseToPinRequest = $this->isResponseToPinRequest;
        }
        if (!is_null($this->isRetryWithTheSameOperationId)) {
            $object->isRetryWithTheSameOperationId = $this->isRetryWithTheSameOperationId;
        }
        if (!is_null($this->pinMasterKeyReference)) {
            $object->pinMasterKeyReference = $this->pinMasterKeyReference;
        }
        if (!is_null($this->track2Data)) {
            $object->track2Data = $this->track2Data;
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
        if (property_exists($object, 'emvData')) {
            if (!is_array($object->emvData) && !is_object($object->emvData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->emvData, true) . '\' is not an array or object');
            }
            $this->emvData = [];
            foreach ($object->emvData as $element) {
                $value = new EmvDataItem();
                $this->emvData[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'encryptedPinBlock')) {
            $this->encryptedPinBlock = $object->encryptedPinBlock;
        }
        if (property_exists($object, 'isResponseToPinRequest')) {
            $this->isResponseToPinRequest = $object->isResponseToPinRequest;
        }
        if (property_exists($object, 'isRetryWithTheSameOperationId')) {
            $this->isRetryWithTheSameOperationId = $object->isRetryWithTheSameOperationId;
        }
        if (property_exists($object, 'pinMasterKeyReference')) {
            $this->pinMasterKeyReference = $object->pinMasterKeyReference;
        }
        if (property_exists($object, 'track2Data')) {
            $this->track2Data = $object->track2Data;
        }
        return $this;
    }
}
