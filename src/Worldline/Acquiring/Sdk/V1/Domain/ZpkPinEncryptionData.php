<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ZpkPinEncryptionData extends PinEncryptionData
{
    const PIN_ENCRYPTION_TYPE = 'ZPK';

    /**
     * @var string|null
     */
    public ?string $zonePinKeyId = null;

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
        if (!is_null($this->zonePinKeyId)) {
            $object->zonePinKeyId = $this->zonePinKeyId;
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
    public function fromObject(object $object): ZpkPinEncryptionData
    {
        parent::fromObject($object);
        $this->pinEncryptionType = self::PIN_ENCRYPTION_TYPE;
        if (property_exists($object, 'zonePinKeyId')) {
            $this->zonePinKeyId = $object->zonePinKeyId;
        }
        return $this;
    }
}
