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
class ApiPaymentErrorResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $detail = null;

    /**
     * @var string|null
     */
    public ?string $instance = null;

    /**
     * @var string|null
     */
    public ?string $requestId = null;

    /**
     * @var int|null
     */
    public ?int $status = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->detail)) {
            $object->detail = $this->detail;
        }
        if (!is_null($this->instance)) {
            $object->instance = $this->instance;
        }
        if (!is_null($this->requestId)) {
            $object->requestId = $this->requestId;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->title)) {
            $object->title = $this->title;
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApiPaymentErrorResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'detail')) {
            $this->detail = $object->detail;
        }
        if (property_exists($object, 'instance')) {
            $this->instance = $object->instance;
        }
        if (property_exists($object, 'requestId')) {
            $this->requestId = $object->requestId;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
