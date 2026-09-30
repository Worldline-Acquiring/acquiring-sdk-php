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
class SubmitEvidenceRequest extends DataObject
{
    /**
     * @var DisputeDocumentIdItem[]|null
     */
    public ?array $documentIds = null;

    /**
     * @var string|null
     */
    public ?string $elaboration = null;

    /**
     * @var bool|null
     */
    public ?bool $includeEntries = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $partialAmount = null;

    /**
     * @var string|null
     */
    public ?string $userId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->documentIds)) {
            $object->documentIds = [];
            foreach ($this->documentIds as $element) {
                if (!is_null($element)) {
                    $object->documentIds[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->elaboration)) {
            $object->elaboration = $this->elaboration;
        }
        if (!is_null($this->includeEntries)) {
            $object->includeEntries = $this->includeEntries;
        }
        if (!is_null($this->partialAmount)) {
            $object->partialAmount = $this->partialAmount->toObject();
        }
        if (!is_null($this->userId)) {
            $object->userId = $this->userId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubmitEvidenceRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'documentIds')) {
            if (!is_array($object->documentIds) && !is_object($object->documentIds)) {
                throw new UnexpectedValueException('value \'' . print_r($object->documentIds, true) . '\' is not an array or object');
            }
            $this->documentIds = [];
            foreach ($object->documentIds as $element) {
                $value = new DisputeDocumentIdItem();
                $this->documentIds[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'elaboration')) {
            $this->elaboration = $object->elaboration;
        }
        if (property_exists($object, 'includeEntries')) {
            $this->includeEntries = $object->includeEntries;
        }
        if (property_exists($object, 'partialAmount')) {
            if (!is_object($object->partialAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->partialAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->partialAmount = $value->fromObject($object->partialAmount);
        }
        if (property_exists($object, 'userId')) {
            $this->userId = $object->userId;
        }
        return $this;
    }
}
