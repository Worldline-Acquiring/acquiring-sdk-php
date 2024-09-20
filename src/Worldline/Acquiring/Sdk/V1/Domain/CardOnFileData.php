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
class CardOnFileData extends DataObject
{
    /**
     * @var InitialCardOnFileData
     */
    public $initialCardOnFileData = null;

    /**
     * @var bool
     */
    public $isInitialTransaction = null;

    /**
     * @var SubsequentCardOnFileData
     */
    public $subsequentCardOnFileData = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->initialCardOnFileData)) {
            $object->initialCardOnFileData = $this->initialCardOnFileData->toObject();
        }
        if (!is_null($this->isInitialTransaction)) {
            $object->isInitialTransaction = $this->isInitialTransaction;
        }
        if (!is_null($this->subsequentCardOnFileData)) {
            $object->subsequentCardOnFileData = $this->subsequentCardOnFileData->toObject();
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
        if (property_exists($object, 'initialCardOnFileData')) {
            if (!is_object($object->initialCardOnFileData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->initialCardOnFileData, true) . '\' is not an object');
            }
            $value = new InitialCardOnFileData();
            $this->initialCardOnFileData = $value->fromObject($object->initialCardOnFileData);
        }
        if (property_exists($object, 'isInitialTransaction')) {
            $this->isInitialTransaction = $object->isInitialTransaction;
        }
        if (property_exists($object, 'subsequentCardOnFileData')) {
            if (!is_object($object->subsequentCardOnFileData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->subsequentCardOnFileData, true) . '\' is not an object');
            }
            $value = new SubsequentCardOnFileData();
            $this->subsequentCardOnFileData = $value->fromObject($object->subsequentCardOnFileData);
        }
        return $this;
    }
}
