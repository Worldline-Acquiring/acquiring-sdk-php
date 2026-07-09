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
class ApiPaymentResponse extends DataObject
{
    /**
     * @var AdditionalResponseData|null
     */
    public ?AdditionalResponseData $additionalResponseData = null;

    /**
     * @var CardPaymentDataForResponse|null
     */
    public ?CardPaymentDataForResponse $cardPaymentData = null;

    /**
     * @var string|null
     */
    public ?string $initialAuthorizationCode = null;

    /**
     * @var string|null
     */
    public ?string $operationId = null;

    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @var ApiReferencesForResponses|null
     */
    public ?ApiReferencesForResponses $references = null;

    /**
     * @var string|null
     */
    public ?string $responder = null;

    /**
     * @var string|null
     */
    public ?string $responseCode = null;

    /**
     * @var string|null
     */
    public ?string $responseCodeCategory = null;

    /**
     * @var string|null
     */
    public ?string $responseCodeDescription = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $statusTimestamp = null;

    /**
     * @var AmountData|null
     */
    public ?AmountData $totalAuthorizedAmount = null;

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->additionalResponseData)) {
            $object->additionalResponseData = $this->additionalResponseData->toObject();
        }
        if (!is_null($this->cardPaymentData)) {
            $object->cardPaymentData = $this->cardPaymentData->toObject();
        }
        if (!is_null($this->initialAuthorizationCode)) {
            $object->initialAuthorizationCode = $this->initialAuthorizationCode;
        }
        if (!is_null($this->operationId)) {
            $object->operationId = $this->operationId;
        }
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->responder)) {
            $object->responder = $this->responder;
        }
        if (!is_null($this->responseCode)) {
            $object->responseCode = $this->responseCode;
        }
        if (!is_null($this->responseCodeCategory)) {
            $object->responseCodeCategory = $this->responseCodeCategory;
        }
        if (!is_null($this->responseCodeDescription)) {
            $object->responseCodeDescription = $this->responseCodeDescription;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusTimestamp)) {
            $object->statusTimestamp = $this->statusTimestamp->format('Y-m-d\\TH:i:s.vP');
        }
        if (!is_null($this->totalAuthorizedAmount)) {
            $object->totalAuthorizedAmount = $this->totalAuthorizedAmount->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApiPaymentResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'additionalResponseData')) {
            if (!is_object($object->additionalResponseData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->additionalResponseData, true) . '\' is not an object');
            }
            $value = new AdditionalResponseData();
            $this->additionalResponseData = $value->fromObject($object->additionalResponseData);
        }
        if (property_exists($object, 'cardPaymentData')) {
            if (!is_object($object->cardPaymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentData, true) . '\' is not an object');
            }
            $value = new CardPaymentDataForResponse();
            $this->cardPaymentData = $value->fromObject($object->cardPaymentData);
        }
        if (property_exists($object, 'initialAuthorizationCode')) {
            $this->initialAuthorizationCode = $object->initialAuthorizationCode;
        }
        if (property_exists($object, 'operationId')) {
            $this->operationId = $object->operationId;
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new ApiReferencesForResponses();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'responder')) {
            $this->responder = $object->responder;
        }
        if (property_exists($object, 'responseCode')) {
            $this->responseCode = $object->responseCode;
        }
        if (property_exists($object, 'responseCodeCategory')) {
            $this->responseCodeCategory = $object->responseCodeCategory;
        }
        if (property_exists($object, 'responseCodeDescription')) {
            $this->responseCodeDescription = $object->responseCodeDescription;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusTimestamp')) {
            $this->statusTimestamp = new DateTime($object->statusTimestamp);
        }
        if (property_exists($object, 'totalAuthorizedAmount')) {
            if (!is_object($object->totalAuthorizedAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->totalAuthorizedAmount, true) . '\' is not an object');
            }
            $value = new AmountData();
            $this->totalAuthorizedAmount = $value->fromObject($object->totalAuthorizedAmount);
        }
        return $this;
    }
}
