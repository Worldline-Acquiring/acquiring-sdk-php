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
class DisputeEntry extends DataObject
{
    /**
     * @var DisputeDocument[]|null
     */
    public ?array $documents = null;

    /**
     * @var string|null
     */
    public ?string $elaboration = null;

    /**
     * @var string|null
     */
    public ?string $entryCategory = null;

    /**
     * @var string|null
     */
    public ?string $entryDateTime = null;

    /**
     * @var string|null
     */
    public ?string $entryId = null;

    /**
     * @var string|null
     */
    public ?string $entryType = null;

    /**
     * @var string|null
     */
    public ?string $entryTypeDescription = null;

    /**
     * @var string|null
     */
    public ?string $messageText = null;

    /**
     * @var string|null
     */
    public ?string $questionnaire = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $responseDueDate = null;

    /**
     * @var string|null
     */
    public ?string $schemeReason = null;

    /**
     * @var string|null
     */
    public ?string $schemeReasonDescription = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $settlementAmount = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $transactionAmount = null;

    /**
     * @var string|null
     */
    public ?string $userId = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->documents)) {
            $object->documents = [];
            foreach ($this->documents as $element) {
                if (!is_null($element)) {
                    $object->documents[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->elaboration)) {
            $object->elaboration = $this->elaboration;
        }
        if (!is_null($this->entryCategory)) {
            $object->entryCategory = $this->entryCategory;
        }
        if (!is_null($this->entryDateTime)) {
            $object->entryDateTime = $this->entryDateTime;
        }
        if (!is_null($this->entryId)) {
            $object->entryId = $this->entryId;
        }
        if (!is_null($this->entryType)) {
            $object->entryType = $this->entryType;
        }
        if (!is_null($this->entryTypeDescription)) {
            $object->entryTypeDescription = $this->entryTypeDescription;
        }
        if (!is_null($this->messageText)) {
            $object->messageText = $this->messageText;
        }
        if (!is_null($this->questionnaire)) {
            $object->questionnaire = $this->questionnaire;
        }
        if (!is_null($this->responseDueDate)) {
            $object->responseDueDate = $this->responseDueDate->format('Y-m-d');
        }
        if (!is_null($this->schemeReason)) {
            $object->schemeReason = $this->schemeReason;
        }
        if (!is_null($this->schemeReasonDescription)) {
            $object->schemeReasonDescription = $this->schemeReasonDescription;
        }
        if (!is_null($this->settlementAmount)) {
            $object->settlementAmount = $this->settlementAmount->toObject();
        }
        if (!is_null($this->transactionAmount)) {
            $object->transactionAmount = $this->transactionAmount->toObject();
        }
        if (!is_null($this->userId)) {
            $object->userId = $this->userId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DisputeEntry
    {
        parent::fromObject($object);
        if (property_exists($object, 'documents')) {
            if (!is_array($object->documents) && !is_object($object->documents)) {
                throw new UnexpectedValueException('value \'' . print_r($object->documents, true) . '\' is not an array or object');
            }
            $this->documents = [];
            foreach ($object->documents as $element) {
                $value = new DisputeDocument();
                $this->documents[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'elaboration')) {
            $this->elaboration = $object->elaboration;
        }
        if (property_exists($object, 'entryCategory')) {
            $this->entryCategory = $object->entryCategory;
        }
        if (property_exists($object, 'entryDateTime')) {
            $this->entryDateTime = $object->entryDateTime;
        }
        if (property_exists($object, 'entryId')) {
            $this->entryId = $object->entryId;
        }
        if (property_exists($object, 'entryType')) {
            $this->entryType = $object->entryType;
        }
        if (property_exists($object, 'entryTypeDescription')) {
            $this->entryTypeDescription = $object->entryTypeDescription;
        }
        if (property_exists($object, 'messageText')) {
            $this->messageText = $object->messageText;
        }
        if (property_exists($object, 'questionnaire')) {
            $this->questionnaire = $object->questionnaire;
        }
        if (property_exists($object, 'responseDueDate')) {
            $this->responseDueDate = new DateTime($object->responseDueDate);
        }
        if (property_exists($object, 'schemeReason')) {
            $this->schemeReason = $object->schemeReason;
        }
        if (property_exists($object, 'schemeReasonDescription')) {
            $this->schemeReasonDescription = $object->schemeReasonDescription;
        }
        if (property_exists($object, 'settlementAmount')) {
            if (!is_object($object->settlementAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->settlementAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->settlementAmount = $value->fromObject($object->settlementAmount);
        }
        if (property_exists($object, 'transactionAmount')) {
            if (!is_object($object->transactionAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->transactionAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->transactionAmount = $value->fromObject($object->transactionAmount);
        }
        if (property_exists($object, 'userId')) {
            $this->userId = $object->userId;
        }
        return $this;
    }
}
