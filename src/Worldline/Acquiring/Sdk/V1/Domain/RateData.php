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
     * @var float|null
     */
    public ?float $exchangeRate = null;

    /**
     * @var float|null
     */
    public ?float $invertedExchangeRate = null;

    /**
     * @var float|null
     */
    public ?float $markUp = null;

    /**
     * @var string|null
     */
    public ?string $markUpBasis = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $quotationDateTime = null;

    /**
     * @return object
     */
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RateData
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
