<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class DukptPinEncryptionData extends PinEncryptionData
{
    const PIN_ENCRYPTION_TYPE = 'DUKPT';

    /**
     * @var string|null
     */
    public ?string $keySerialNumber = null;

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
        if (!is_null($this->keySerialNumber)) {
            $object->keySerialNumber = $this->keySerialNumber;
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
    public function fromObject(object $object): DukptPinEncryptionData
    {
        parent::fromObject($object);
        $this->pinEncryptionType = self::PIN_ENCRYPTION_TYPE;
        if (property_exists($object, 'keySerialNumber')) {
            $this->keySerialNumber = $object->keySerialNumber;
        }
        return $this;
    }
}
