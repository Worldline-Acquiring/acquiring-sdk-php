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
class OnlinePinData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $encryptedPinBlock = null;

    /**
     * @var int|null
     */
    public ?int $pinBlockFormat = null;

    /**
     * @var PinEncryptionData|null
     */
    public ?PinEncryptionData $pinEncryptionData = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->encryptedPinBlock)) {
            $object->encryptedPinBlock = $this->encryptedPinBlock;
        }
        if (!is_null($this->pinBlockFormat)) {
            $object->pinBlockFormat = $this->pinBlockFormat;
        }
        if (!is_null($this->pinEncryptionData)) {
            $object->pinEncryptionData = $this->pinEncryptionData->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OnlinePinData
    {
        parent::fromObject($object);
        if (property_exists($object, 'encryptedPinBlock')) {
            $this->encryptedPinBlock = $object->encryptedPinBlock;
        }
        if (property_exists($object, 'pinBlockFormat')) {
            $this->pinBlockFormat = $object->pinBlockFormat;
        }
        if (property_exists($object, 'pinEncryptionData')) {
            if (!is_object($object->pinEncryptionData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pinEncryptionData, true) . '\' is not an object');
            }
            $value = new PinEncryptionData();
            $this->pinEncryptionData = $value->fromObject($object->pinEncryptionData);
        }
        return $this;
    }
}
