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
class GetDccRateResponse extends DataObject
{
    /**
     * @var string
     */
    public $disclaimerDisplay = null;

    /**
     * @var string
     */
    public $disclaimerReceipt = null;

    /**
     * @var DccProposal
     */
    public $proposal = null;

    /**
     * @var string
     */
    public $result = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->disclaimerDisplay)) {
            $object->disclaimerDisplay = $this->disclaimerDisplay;
        }
        if (!is_null($this->disclaimerReceipt)) {
            $object->disclaimerReceipt = $this->disclaimerReceipt;
        }
        if (!is_null($this->proposal)) {
            $object->proposal = $this->proposal->toObject();
        }
        if (!is_null($this->result)) {
            $object->result = $this->result;
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
        if (property_exists($object, 'disclaimerDisplay')) {
            $this->disclaimerDisplay = $object->disclaimerDisplay;
        }
        if (property_exists($object, 'disclaimerReceipt')) {
            $this->disclaimerReceipt = $object->disclaimerReceipt;
        }
        if (property_exists($object, 'proposal')) {
            if (!is_object($object->proposal)) {
                throw new UnexpectedValueException('value \'' . print_r($object->proposal, true) . '\' is not an object');
            }
            $value = new DccProposal();
            $this->proposal = $value->fromObject($object->proposal);
        }
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        return $this;
    }
}
