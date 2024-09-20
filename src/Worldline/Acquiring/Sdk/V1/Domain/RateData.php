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
class RateData extends DataObject
{
    /**
     * @var float
     */
    public $exchangeRate = null;

    /**
     * @var float
     */
    public $invertedExchangeRate = null;

    /**
     * @var float
     */
    public $markUp = null;

    /**
     * @var string
     */
    public $markUpBasis = null;

    /**
     * @var DateTime
     */
    public $quotationDateTime = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->exchangeRate)) {
            $object->exchangeRate = $this->exchangeRate;
        }
        if (!is_null($this->invertedExchangeRate)) {
            $object->invertedExchangeRate = $this->invertedExchangeRate;
        }
        if (!is_null($this->markUp)) {
            $object->markUp = $this->markUp;
        }
        if (!is_null($this->markUpBasis)) {
            $object->markUpBasis = $this->markUpBasis;
        }
        if (!is_null($this->quotationDateTime)) {
            $object->quotationDateTime = $this->quotationDateTime->format('Y-m-d\\TH:i:s.vP');
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
        if (property_exists($object, 'exchangeRate')) {
            $this->exchangeRate = $object->exchangeRate;
        }
        if (property_exists($object, 'invertedExchangeRate')) {
            $this->invertedExchangeRate = $object->invertedExchangeRate;
        }
        if (property_exists($object, 'markUp')) {
            $this->markUp = $object->markUp;
        }
        if (property_exists($object, 'markUpBasis')) {
            $this->markUpBasis = $object->markUpBasis;
        }
        if (property_exists($object, 'quotationDateTime')) {
            $this->quotationDateTime = new DateTime($object->quotationDateTime);
        }
        return $this;
    }
}
