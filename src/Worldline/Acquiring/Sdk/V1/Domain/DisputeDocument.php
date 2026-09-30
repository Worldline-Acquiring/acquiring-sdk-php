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
class DisputeDocument extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $documentId = null;

    /**
     * @var string|null
     */
    public ?string $fileName = null;

    /**
     * @var string|null
     */
    public ?string $mimeType = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->documentId)) {
            $object->documentId = $this->documentId;
        }
        if (!is_null($this->fileName)) {
            $object->fileName = $this->fileName;
        }
        if (!is_null($this->mimeType)) {
            $object->mimeType = $this->mimeType;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeDocument
    {
        parent::fromObject($object);
        if (property_exists($object, 'documentId')) {
            $this->documentId = $object->documentId;
        }
        if (property_exists($object, 'fileName')) {
            $this->fileName = $object->fileName;
        }
        if (property_exists($object, 'mimeType')) {
            $this->mimeType = $object->mimeType;
        }
        return $this;
    }
}
