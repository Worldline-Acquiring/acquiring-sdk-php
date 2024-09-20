<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Dynamiccurrencyconversion;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Communication\ErrorResponseException;
use Worldline\Acquiring\Sdk\Communication\InvalidResponseException;
use Worldline\Acquiring\Sdk\Communication\ResponseClassMap;
use Worldline\Acquiring\Sdk\V1\ApiException;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;
use Worldline\Acquiring\Sdk\V1\Domain\GetDCCRateRequest;
use Worldline\Acquiring\Sdk\V1\Domain\GetDccRateResponse;
use Worldline\Acquiring\Sdk\V1\ExceptionFactory;
use Worldline\Acquiring\Sdk\V1\PlatformException;
use Worldline\Acquiring\Sdk\V1\ReferenceException;
use Worldline\Acquiring\Sdk\V1\ValidationException;

/**
 * DynamicCurrencyConversion client.
 */
class DynamicCurrencyConversionClient extends ApiResource
{
    /** @var ExceptionFactory|null */
    private $responseExceptionFactory = null;

    /**
     * Resource /services/v1/{acquirerId}/{merchantId}/dcc-rates - Request DCC rate
     *
     * @param GetDCCRateRequest $body
     * @param CallContext|null $callContext
     * @return GetDccRateResponse
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dynamic-Currency-Conversion/operation/requestDccRate Request DCC rate
     */
    public function requestDccRate(GetDCCRateRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\GetDccRateResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/services/v1/{acquirerId}/{merchantId}/dcc-rates'),
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
