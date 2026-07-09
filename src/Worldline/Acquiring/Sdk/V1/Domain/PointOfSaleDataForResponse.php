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
class PointOfSaleDataForResponse extends DataObject
{
    /**
     * @var EmvDataItem[]|null
     */
    public ?array $emvData = null;

    /**
     * @var string|null
     */
    public ?string $panLast4Digits = null;

    /**
     * @var int|null
     */
    public ?int $pinRetryCounter = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->emvData)) {
            $object->emvData = [];
            foreach ($this->emvData as $element) {
                if (!is_null($element)) {
                    $object->emvData[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->panLast4Digits)) {
            $object->panLast4Digits = $this->panLast4Digits;
        }
        if (!is_null($this->pinRetryCounter)) {
            $object->pinRetryCounter = $this->pinRetryCounter;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PointOfSaleDataForResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'emvData')) {
            if (!is_array($object->emvData) && !is_object($object->emvData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->emvData, true) . '\' is not an array or object');
            }
            $this->emvData = [];
            foreach ($object->emvData as $element) {
                $value = new EmvDataItem();
                $this->emvData[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'panLast4Digits')) {
            $this->panLast4Digits = $object->panLast4Digits;
        }
        if (property_exists($object, 'pinRetryCounter')) {
            $this->pinRetryCounter = $object->pinRetryCounter;
        }
        return $this;
    }
}
