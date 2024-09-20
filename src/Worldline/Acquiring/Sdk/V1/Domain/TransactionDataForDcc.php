<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Domain;

use DateTime;
use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * @package Worldline\Acquiring\Sdk\V1\Domain
 */
class TransactionDataForDcc extends DataObject
{
    /**
     * @var AmountData
     */
    public $amount = null;

    /**
     * @var DateTime
     */
    public $transactionTimestamp = null;

    /**
     * @var string
     */
    public $transactionType = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->transactionTimestamp)) {
            $object->transactionTimestamp = $this->transactionTimestamp->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->transactionType)) {
            $object->transactionType = $this->transactionType;
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
        if (property_exists($object, 'amount')) {
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'transactionTimestamp')) {
            $this->transactionTimestamp = new DateTime($object->transactionTimestamp);
        }
        if (property_exists($object, 'transactionType')) {
            $this->transactionType = $object->transactionType;
        }
        return $this;
    }
}
