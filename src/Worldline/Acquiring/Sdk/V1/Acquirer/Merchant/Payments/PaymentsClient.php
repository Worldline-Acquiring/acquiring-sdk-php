<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Payments;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Communication\ErrorResponseException;
use Worldline\Acquiring\Sdk\Communication\InvalidResponseException;
use Worldline\Acquiring\Sdk\Communication\ResponseClassMap;
use Worldline\Acquiring\Sdk\V1\ApiException;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;
use Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponse;
use Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponseForRefund;
use Worldline\Acquiring\Sdk\V1\Domain\ApiCaptureRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiIncrementRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiIncrementResponse;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentRefundRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentResource;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentResponse;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentReversalRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiReversalResponse;
use Worldline\Acquiring\Sdk\V1\ExceptionFactory;
use Worldline\Acquiring\Sdk\V1\PlatformException;
use Worldline\Acquiring\Sdk\V1\ReferenceException;
use Worldline\Acquiring\Sdk\V1\ValidationException;

/**
 * Payments client.
 */
class PaymentsClient extends ApiResource
{
    /** @var ExceptionFactory|null */
    private $responseExceptionFactory = null;

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments - Create payment
     *
     * @param ApiPaymentRequest $body
     * @param CallContext|null $callContext
     * @return ApiPaymentResponse
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Payments/operation/processPayment Create payment
     */
    public function processPayment(ApiPaymentRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/payments'),
                $body,
                null,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments/{paymentId} - Retrieve payment
     *
     * @param string $paymentId
     * @param GetPaymentStatusParams $query
     * @param CallContext|null $callContext
     * @return ApiPaymentResource
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Payments/operation/getPaymentStatus Retrieve payment
     */
    public function getPaymentStatus($paymentId, GetPaymentStatusParams $query, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentResource';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}'),
                $query,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/captures - Capture payment
     *
     * @param string $paymentId
     * @param ApiCaptureRequest $body
     * @param CallContext|null $callContext
     * @return ApiActionResponse
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Payments/operation/simpleCaptureOfPayment Capture payment
     */
    public function simpleCaptureOfPayment($paymentId, ApiCaptureRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/captures'),
                $body,
                null,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/authorization-reversals - Reverse authorization
     *
     * @param string $paymentId
     * @param ApiPaymentReversalRequest $body
     * @param CallContext|null $callContext
     * @return ApiReversalResponse
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Payments/operation/reverseAuthorization Reverse authorization
     */
    public function reverseAuthorization($paymentId, ApiPaymentReversalRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiReversalResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/authorization-reversals'),
                $body,
                null,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/increments - Increment authorization
     *
     * @param string $paymentId
     * @param ApiIncrementRequest $body
     * @param CallContext|null $callContext
     * @return ApiIncrementResponse
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Payments/operation/incrementPayment Increment authorization
     */
    public function incrementPayment($paymentId, ApiIncrementRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiIncrementResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/increments'),
                $body,
                null,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/refunds - Refund payment
     *
     * @param string $paymentId
     * @param ApiPaymentRefundRequest $body
     * @param CallContext|null $callContext
     * @return ApiActionResponseForRefund
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Payments/operation/createRefund Refund payment
     */
    public function createRefund($paymentId, ApiPaymentRefundRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponseForRefund';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/payments/{paymentId}/refunds'),
                $body,
                null,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /** @return ExceptionFactory */
    private function getResponseExceptionFactory()
    {
        if (is_null($this->responseExceptionFactory)) {
            $this->responseExceptionFactory = new ExceptionFactory();
        }
        return $this->responseExceptionFactory;
    }
}
