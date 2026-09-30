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
class MerchantScope extends DataObject
{
    /**
     * @var string
     */
    protected string $merchantScopeType;

    /**
     * Possible values are: BY_ACQUIRER_IDS, BY_MERCHANT_ROOT_IDS, BY_MERCHANT_IDS.
     *
     * @return string
     */
    public function getMerchantScopeType(): string
    {
        return $this->merchantScopeType;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (isset($this->merchantScopeType) && $this->merchantScopeType !== '') {
            $object->merchantScopeType = $this->merchantScopeType;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MerchantScope
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantScopeType')) {
            $this->merchantScopeType = $object->merchantScopeType;
        }
        return $this;
    }
}
