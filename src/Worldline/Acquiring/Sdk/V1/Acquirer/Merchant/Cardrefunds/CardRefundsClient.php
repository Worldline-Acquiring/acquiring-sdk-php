<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardrefunds;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Communication\ErrorResponseException;
use Worldline\Acquiring\Sdk\Communication\InvalidResponseException;
use Worldline\Acquiring\Sdk\Communication\ResponseClassMap;
use Worldline\Acquiring\Sdk\V1\ApiException;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;
use Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponseForRefund;
use Worldline\Acquiring\Sdk\V1\Domain\ApiCaptureRequestForRefund;
use Worldline\Acquiring\Sdk\V1\Domain\ApiRefundRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiRefundResource;
use Worldline\Acquiring\Sdk\V1\Domain\ApiRefundResponse;
use Worldline\Acquiring\Sdk\V1\Domain\ApiRefundReversalRequest;
use Worldline\Acquiring\Sdk\V1\ExceptionFactory;
use Worldline\Acquiring\Sdk\V1\PlatformException;
use Worldline\Acquiring\Sdk\V1\ReferenceException;
use Worldline\Acquiring\Sdk\V1\ValidationException;

/**
 * CardRefunds client.
 *
 * @package Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardrefunds
 */
class CardRefundsClient extends ApiResource
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/refunds - Create standalone card refund
     *
     * @param ApiRefundRequest $body
     * @param CallContext|null $callContext
     *
     * @return ApiRefundResponse
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Card-Refunds/operation/processStandaloneRefund Create standalone card refund
     */
    public function processStandaloneRefund(ApiRefundRequest $body, ?CallContext $callContext = null): ApiRefundResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiRefundResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/refunds'),
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
     * Resource /processing/v1/{acquirerId}/{merchantId}/refunds/{refundId} - Retrieve card refund
     *
     * @param string           $refundId
     * @param GetRefundParams  $query
     * @param CallContext|null $callContext
     *
     * @return ApiRefundResource
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Card-Refunds/operation/getRefund Retrieve card refund
     */
    public function getRefund(string $refundId, GetRefundParams $query, ?CallContext $callContext = null): ApiRefundResource
    {
        $this->context['refundId'] = $refundId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiRefundResource';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/refunds/{refundId}'),
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
     * Resource /processing/v1/{acquirerId}/{merchantId}/refunds/{refundId}/captures - Capture refund
     *
     * @param string                     $refundId
     * @param ApiCaptureRequestForRefund $body
     * @param CallContext|null           $callContext
     *
     * @return ApiActionResponseForRefund
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Card-Refunds/operation/captureRefund Capture refund
     */
    public function captureRefund(string $refundId, ApiCaptureRequestForRefund $body, ?CallContext $callContext = null): ApiActionResponseForRefund
    {
        $this->context['refundId'] = $refundId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponseForRefund';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/refunds/{refundId}/captures'),
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
     * Resource /processing/v1/{acquirerId}/{merchantId}/refunds/{refundId}/authorization-reversals - Reverse refund authorization
     *
     * @param string                   $refundId
     * @param ApiRefundReversalRequest $body
     * @param CallContext|null         $callContext
     *
     * @return ApiActionResponseForRefund
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Card-Refunds/operation/reverseRefundAuthorization Reverse refund authorization
     */
    public function reverseRefundAuthorization(string $refundId, ApiRefundReversalRequest $body, ?CallContext $callContext = null): ApiActionResponseForRefund
    {
        $this->context['refundId'] = $refundId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiActionResponseForRefund';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/refunds/{refundId}/authorization-reversals'),
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
     * @return ExceptionFactory
     */
    private function getResponseExceptionFactory(): ExceptionFactory
    {
        if (is_null($this->responseExceptionFactory)) {
            $this->responseExceptionFactory = new ExceptionFactory();
        }
        return $this->responseExceptionFactory;
    }
}
