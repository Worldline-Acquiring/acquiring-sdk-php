<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class AesUkptPinEncryptionData extends PinEncryptionData
{
    const PIN_ENCRYPTION_TYPE = 'AES_UKPT';

    /**
     * @var int|null
     */
    public ?int $keyGeneration = null;

    /**
     * @var string|null
     */
    public ?string $randomValue = null;

    public function __construct()
    {
        $this->pinEncryptionType = self::PIN_ENCRYPTION_TYPE;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->keyGeneration)) {
            $object->keyGeneration = $this->keyGeneration;
        }
        if (!is_null($this->randomValue)) {
            $object->randomValue = $this->randomValue;
        }
        $object->pinEncryptionType = self::PIN_ENCRYPTION_TYPE;
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AesUkptPinEncryptionData
    {
        parent::fromObject($object);
        $this->pinEncryptionType = self::PIN_ENCRYPTION_TYPE;
        if (property_exists($object, 'keyGeneration')) {
            $this->keyGeneration = $object->keyGeneration;
        }
        if (property_exists($object, 'randomValue')) {
            $this->randomValue = $object->randomValue;
        }
        return $this;
    }
}
