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
class PinEncryptionData extends DataObject
{
    /**
     * @var string
     */
    protected string $pinEncryptionType;

    /**
     * Possible values are: AES_UKPT, DUKPT, ZPK.
     *
     * @return string
     */
    public function getPinEncryptionType(): string
    {
        return $this->pinEncryptionType;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (isset($this->pinEncryptionType) && $this->pinEncryptionType !== '') {
            $object->pinEncryptionType = $this->pinEncryptionType;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PinEncryptionData
    {
        parent::fromObject($object);
        if (property_exists($object, 'pinEncryptionType')) {
            $this->pinEncryptionType = $object->pinEncryptionType;
        }
        return $this;
    }
}
