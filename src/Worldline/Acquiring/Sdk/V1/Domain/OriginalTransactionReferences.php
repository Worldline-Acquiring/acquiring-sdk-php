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
class OriginalTransactionReferences extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $originalSchemeTransactionId = null;

    /**
     * @var string|null
     */
    public ?string $originalSchemeTransactionLinkId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->originalSchemeTransactionId)) {
            $object->originalSchemeTransactionId = $this->originalSchemeTransactionId;
        }
        if (!is_null($this->originalSchemeTransactionLinkId)) {
            $object->originalSchemeTransactionLinkId = $this->originalSchemeTransactionLinkId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OriginalTransactionReferences
    {
        parent::fromObject($object);
        if (property_exists($object, 'originalSchemeTransactionId')) {
            $this->originalSchemeTransactionId = $object->originalSchemeTransactionId;
        }
        if (property_exists($object, 'originalSchemeTransactionLinkId')) {
            $this->originalSchemeTransactionLinkId = $object->originalSchemeTransactionLinkId;
        }
        return $this;
    }
}
