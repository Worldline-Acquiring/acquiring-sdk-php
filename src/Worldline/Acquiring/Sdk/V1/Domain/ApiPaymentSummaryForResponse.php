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
class ApiPaymentSummaryForResponse extends DataObject
{
    /**
     * @var string
     */
    public $paymentId = null;

    /**
     * @var ApiReferencesForResponses
     */
    public $references = null;

    /**
     * @var string
     */
    public $retryAfter = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var DateTime
     */
    public $statusTimestamp = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->retryAfter)) {
            $object->retryAfter = $this->retryAfter;
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new ApiReferencesForResponses();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'retryAfter')) {
            $this->retryAfter = $object->retryAfter;
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
