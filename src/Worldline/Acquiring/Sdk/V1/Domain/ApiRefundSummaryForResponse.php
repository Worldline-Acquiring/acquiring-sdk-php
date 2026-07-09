<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use DateTime;
use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ApiRefundSummaryForResponse extends DataObject
{
    /**
     * @var ApiReferencesForResponses|null
     */
    public ?ApiReferencesForResponses $references = null;

    /**
     * @var string|null
     */
    public ?string $refundId = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $statusTimestamp = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->refundId)) {
            $object->refundId = $this->refundId;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusTimestamp)) {
            $object->statusTimestamp = $this->statusTimestamp->format('Y-m-d\\TH:i:s.vP');
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApiRefundSummaryForResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new ApiReferencesForResponses();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'refundId')) {
            $this->refundId = $object->refundId;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusTimestamp')) {
            $this->statusTimestamp = new DateTime($object->statusTimestamp);
        }
        return $this;
    }
}
