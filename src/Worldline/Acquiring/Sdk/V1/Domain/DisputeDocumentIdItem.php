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
class DisputeDocumentIdItem extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $documentId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->documentId)) {
            $object->documentId = $this->documentId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeDocumentIdItem
    {
        parent::fromObject($object);
        if (property_exists($object, 'documentId')) {
            $this->documentId = $object->documentId;
        }
        return $this;
    }
}
