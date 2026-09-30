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
class DisputeMerchantDataBase extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acquirerId = null;

    /**
     * @var string|null
     */
    public ?string $merchantId = null;

    /**
     * @var string|null
     */
    public ?string $merchantRootId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerId)) {
            $object->acquirerId = $this->acquirerId;
        }
        if (!is_null($this->merchantId)) {
            $object->merchantId = $this->merchantId;
        }
        if (!is_null($this->merchantRootId)) {
            $object->merchantRootId = $this->merchantRootId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeMerchantDataBase
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerId')) {
            $this->acquirerId = $object->acquirerId;
        }
        if (property_exists($object, 'merchantId')) {
            $this->merchantId = $object->merchantId;
        }
        if (property_exists($object, 'merchantRootId')) {
            $this->merchantRootId = $object->merchantRootId;
        }
        return $this;
    }
}
