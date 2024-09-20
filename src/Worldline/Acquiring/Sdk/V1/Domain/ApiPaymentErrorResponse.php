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
     * @var string
     */
    public $detail = null;

    /**
     * @var string
     */
    public $instance = null;

    /**
     * @var int
     */
    public $status = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->detail)) {
            $object->detail = $this->detail;
        }
        if (!is_null($this->instance)) {
            $object->instance = $this->instance;
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'detail')) {
            $this->detail = $object->detail;
        }
        if (property_exists($object, 'instance')) {
            $this->instance = $object->instance;
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
