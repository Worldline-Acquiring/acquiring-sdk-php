<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class ByAcquirerIds extends MerchantScope
{
    const MERCHANT_SCOPE_TYPE = 'BY_ACQUIRER_IDS';

    /**
     * @var string[]|null
     */
    public ?array $acquirerIds = null;

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
        if (!is_null($this->acquirerIds)) {
            $object->acquirerIds = [];
            foreach ($this->acquirerIds as $element) {
                if (!is_null($element)) {
                    $object->acquirerIds[] = $element;
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
    public function fromObject(object $object): ByAcquirerIds
    {
        parent::fromObject($object);
        $this->merchantScopeType = self::MERCHANT_SCOPE_TYPE;
        if (property_exists($object, 'acquirerIds')) {
            if (!is_array($object->acquirerIds) && !is_object($object->acquirerIds)) {
                throw new UnexpectedValueException('value \'' . print_r($object->acquirerIds, true) . '\' is not an array or object');
            }
            $this->acquirerIds = [];
            foreach ($object->acquirerIds as $element) {
                $this->acquirerIds[] = $element;
            }
        }
        return $this;
    }
}
