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
class CapturePointOfSaleData extends DataObject
{
    /**
     * @var EmvDataItem[]|null
     */
    public ?array $emvData = null;

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
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CapturePointOfSaleData
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
        return $this;
    }
}
