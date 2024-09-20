<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Accountverifications;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Communication\ErrorResponseException;
use Worldline\Acquiring\Sdk\Communication\InvalidResponseException;
use Worldline\Acquiring\Sdk\Communication\ResponseClassMap;
use Worldline\Acquiring\Sdk\V1\ApiException;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;
use Worldline\Acquiring\Sdk\V1\Domain\ApiAccountVerificationRequest;
use Worldline\Acquiring\Sdk\V1\Domain\ApiAccountVerificationResponse;
use Worldline\Acquiring\Sdk\V1\ExceptionFactory;
use Worldline\Acquiring\Sdk\V1\PlatformException;
use Worldline\Acquiring\Sdk\V1\ReferenceException;
use Worldline\Acquiring\Sdk\V1\ValidationException;

/**
 * AccountVerifications client.
 */
class AccountVerificationsClient extends ApiResource
{
    /** @var ExceptionFactory|null */
    private $responseExceptionFactory = null;

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/account-verifications - Verify account
     *
     * @param ApiAccountVerificationRequest $body
     * @param CallContext|null $callContext
     * @return ApiAccountVerificationResponse
     *
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link https://docs.acquiring.worldline-solutions.com/api-reference#tag/Account-Verifications/operation/processAccountVerification Verify account
     */
    public function processAccountVerification(ApiAccountVerificationRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiAccountVerificationResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/processing/v1/{acquirerId}/{merchantId}/account-verifications'),
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
