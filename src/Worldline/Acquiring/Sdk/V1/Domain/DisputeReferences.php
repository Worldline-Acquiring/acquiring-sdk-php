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
class DisputeReferences extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acquirerDisputeReference = null;

    /**
     * @var string|null
     */
    public ?string $schemeDisputeReference = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerDisputeReference)) {
            $object->acquirerDisputeReference = $this->acquirerDisputeReference;
        }
        if (!is_null($this->schemeDisputeReference)) {
            $object->schemeDisputeReference = $this->schemeDisputeReference;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeReferences
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerDisputeReference')) {
            $this->acquirerDisputeReference = $object->acquirerDisputeReference;
        }
        if (property_exists($object, 'schemeDisputeReference')) {
            $this->schemeDisputeReference = $object->schemeDisputeReference;
        }
        return $this;
    }
}
