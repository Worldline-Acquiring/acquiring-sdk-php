<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ByMerchantIds extends MerchantScope
{
    const MERCHANT_SCOPE_TYPE = 'BY_MERCHANT_IDS';

    /**
     * @var MerchantIdItem[]|null
     */
    public ?array $merchantIds = null;

    public function __construct()
    {
        $this->merchantScopeType = self::MERCHANT_SCOPE_TYPE;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->merchantIds)) {
            $object->merchantIds = [];
            foreach ($this->merchantIds as $element) {
                if (!is_null($element)) {
                    $object->merchantIds[] = $element->toObject();
                }
            }
        }
        $object->merchantScopeType = self::MERCHANT_SCOPE_TYPE;
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ByMerchantIds
    {
        parent::fromObject($object);
        $this->merchantScopeType = self::MERCHANT_SCOPE_TYPE;
        if (property_exists($object, 'merchantIds')) {
            if (!is_array($object->merchantIds) && !is_object($object->merchantIds)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantIds, true) . '\' is not an array or object');
            }
            $this->merchantIds = [];
            foreach ($object->merchantIds as $element) {
                $value = new MerchantIdItem();
                $this->merchantIds[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
