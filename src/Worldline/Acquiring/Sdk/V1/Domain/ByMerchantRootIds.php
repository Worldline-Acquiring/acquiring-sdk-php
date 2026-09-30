<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ByMerchantRootIds extends MerchantScope
{
    const MERCHANT_SCOPE_TYPE = 'BY_MERCHANT_ROOT_IDS';

    /**
     * @var MerchantRootIdItem[]|null
     */
    public ?array $merchantRootIds = null;

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
        if (!is_null($this->merchantRootIds)) {
            $object->merchantRootIds = [];
            foreach ($this->merchantRootIds as $element) {
                if (!is_null($element)) {
                    $object->merchantRootIds[] = $element->toObject();
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
    public function fromObject(object $object): ByMerchantRootIds
    {
        parent::fromObject($object);
        $this->merchantScopeType = self::MERCHANT_SCOPE_TYPE;
        if (property_exists($object, 'merchantRootIds')) {
            if (!is_array($object->merchantRootIds) && !is_object($object->merchantRootIds)) {
                throw new UnexpectedValueException('value \'' . print_r($object->merchantRootIds, true) . '\' is not an array or object');
            }
            $this->merchantRootIds = [];
            foreach ($object->merchantRootIds as $element) {
                $value = new MerchantRootIdItem();
                $this->merchantRootIds[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
