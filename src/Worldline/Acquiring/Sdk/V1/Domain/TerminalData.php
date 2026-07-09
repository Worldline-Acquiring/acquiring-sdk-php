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
class TerminalData extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $allowSingleTap = null;

    /**
     * @var string[]|null
     */
    public ?array $cardReadingCapabilities = null;

    /**
     * @var string|null
     */
    public ?string $cardholderActivatedTerminalLevel = null;

    /**
     * @var bool|null
     */
    public ?bool $isAttendedTerminal = null;

    /**
     * @var bool|null
     */
    public ?bool $isOfflineApproved = null;

    /**
     * @var string|null
     */
    public ?string $offlineAuthorizationResponseCode = null;

    /**
     * @var string|null
     */
    public ?string $pinEntryCapability = null;

    /**
     * @var string|null
     */
    public ?string $terminalId = null;

    /**
     * @var string|null
     */
    public ?string $terminalLocation = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->allowSingleTap)) {
            $object->allowSingleTap = $this->allowSingleTap;
        }
        if (!is_null($this->cardReadingCapabilities)) {
            $object->cardReadingCapabilities = [];
            foreach ($this->cardReadingCapabilities as $element) {
                if (!is_null($element)) {
                    $object->cardReadingCapabilities[] = $element;
                }
            }
        }
        if (!is_null($this->cardholderActivatedTerminalLevel)) {
            $object->cardholderActivatedTerminalLevel = $this->cardholderActivatedTerminalLevel;
        }
        if (!is_null($this->isAttendedTerminal)) {
            $object->isAttendedTerminal = $this->isAttendedTerminal;
        }
        if (!is_null($this->isOfflineApproved)) {
            $object->isOfflineApproved = $this->isOfflineApproved;
        }
        if (!is_null($this->offlineAuthorizationResponseCode)) {
            $object->offlineAuthorizationResponseCode = $this->offlineAuthorizationResponseCode;
        }
        if (!is_null($this->pinEntryCapability)) {
            $object->pinEntryCapability = $this->pinEntryCapability;
        }
        if (!is_null($this->terminalId)) {
            $object->terminalId = $this->terminalId;
        }
        if (!is_null($this->terminalLocation)) {
            $object->terminalLocation = $this->terminalLocation;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): TerminalData
    {
        parent::fromObject($object);
        if (property_exists($object, 'allowSingleTap')) {
            $this->allowSingleTap = $object->allowSingleTap;
        }
        if (property_exists($object, 'cardReadingCapabilities')) {
            if (!is_array($object->cardReadingCapabilities) && !is_object($object->cardReadingCapabilities)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardReadingCapabilities, true) . '\' is not an array or object');
            }
            $this->cardReadingCapabilities = [];
            foreach ($object->cardReadingCapabilities as $element) {
                $this->cardReadingCapabilities[] = $element;
            }
        }
        if (property_exists($object, 'cardholderActivatedTerminalLevel')) {
            $this->cardholderActivatedTerminalLevel = $object->cardholderActivatedTerminalLevel;
        }
        if (property_exists($object, 'isAttendedTerminal')) {
            $this->isAttendedTerminal = $object->isAttendedTerminal;
        }
        if (property_exists($object, 'isOfflineApproved')) {
            $this->isOfflineApproved = $object->isOfflineApproved;
        }
        if (property_exists($object, 'offlineAuthorizationResponseCode')) {
            $this->offlineAuthorizationResponseCode = $object->offlineAuthorizationResponseCode;
        }
        if (property_exists($object, 'pinEntryCapability')) {
            $this->pinEntryCapability = $object->pinEntryCapability;
        }
        if (property_exists($object, 'terminalId')) {
            $this->terminalId = $object->terminalId;
        }
        if (property_exists($object, 'terminalLocation')) {
            $this->terminalLocation = $object->terminalLocation;
        }
        return $this;
    }
}
