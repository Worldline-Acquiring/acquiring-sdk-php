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
class AdditionalResponseData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $merchantAdviceCode = null;

    /**
     * @var string|null
     */
    public ?string $merchantAdviceCodeDescription = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->merchantAdviceCode)) {
            $object->merchantAdviceCode = $this->merchantAdviceCode;
        }
        if (!is_null($this->merchantAdviceCodeDescription)) {
            $object->merchantAdviceCodeDescription = $this->merchantAdviceCodeDescription;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AdditionalResponseData
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantAdviceCode')) {
            $this->merchantAdviceCode = $object->merchantAdviceCode;
        }
        if (property_exists($object, 'merchantAdviceCodeDescription')) {
            $this->merchantAdviceCodeDescription = $object->merchantAdviceCodeDescription;
        }
        return $this;
    }
}
