<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Disputemanagement;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Communication\ErrorResponseException;
use Worldline\Acquiring\Sdk\Communication\InvalidResponseException;
use Worldline\Acquiring\Sdk\Communication\ResponseClassMap;
use Worldline\Acquiring\Sdk\V1\ApiException;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;
use Worldline\Acquiring\Sdk\V1\Domain\AcceptDisputeLiabilityRequest;
use Worldline\Acquiring\Sdk\V1\Domain\DisputeResponse;
use Worldline\Acquiring\Sdk\V1\Domain\SearchDisputesRequest;
use Worldline\Acquiring\Sdk\V1\Domain\SearchDisputesResponse;
use Worldline\Acquiring\Sdk\V1\Domain\SubmitEvidenceRequest;
use Worldline\Acquiring\Sdk\V1\ExceptionFactory;
use Worldline\Acquiring\Sdk\V1\PlatformException;
use Worldline\Acquiring\Sdk\V1\ReferenceException;
use Worldline\Acquiring\Sdk\V1\ValidationException;

/**
 * DisputeManagement client.
 *
 * @package Worldline\Acquiring\Sdk\V1\Disputemanagement
 */
class DisputeManagementClient extends ApiResource
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /dispute-management/v1/disputes/search - Search Disputes
     *
     * @param SearchDisputesRequest $body
     * @param CallContext|null      $callContext
     *
     * @return SearchDisputesResponse
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Management/operation/searchDisputes Search Disputes
     */
    public function searchDisputes(SearchDisputesRequest $body, ?CallContext $callContext = null): SearchDisputesResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\SearchDisputesResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/dispute-management/v1/disputes/search'),
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
     * Resource /dispute-management/v1/disputes/{disputeId} - Retrieve Dispute
     *
     * @param string           $disputeId
     * @param GetDisputeParams $query
     * @param CallContext|null $callContext
     *
     * @return DisputeResponse
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Management/operation/getDispute Retrieve Dispute
     */
    public function getDispute(string $disputeId, GetDisputeParams $query, ?CallContext $callContext = null): DisputeResponse
    {
        $this->context['disputeId'] = $disputeId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\DisputeResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/dispute-management/v1/disputes/{disputeId}'),
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
     * Resource /dispute-management/v1/disputes/{disputeId}/accept - Accept Liability
     *
     * @param string                        $disputeId
     * @param AcceptDisputeLiabilityRequest $body
     * @param CallContext|null              $callContext
     *
     * @return DisputeResponse
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Management/operation/acceptDisputeLiability Accept Liability
     */
    public function acceptDisputeLiability(string $disputeId, AcceptDisputeLiabilityRequest $body, ?CallContext $callContext = null): DisputeResponse
    {
        $this->context['disputeId'] = $disputeId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\DisputeResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/dispute-management/v1/disputes/{disputeId}/accept'),
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
     * Resource /dispute-management/v1/disputes/{disputeId}/submit-evidence - Submit Evidence
     *
     * @param string                $disputeId
     * @param SubmitEvidenceRequest $body
     * @param CallContext|null      $callContext
     *
     * @return DisputeResponse
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Management/operation/submitEvidence Submit Evidence
     */
    public function submitEvidence(string $disputeId, SubmitEvidenceRequest $body, ?CallContext $callContext = null): DisputeResponse
    {
        $this->context['disputeId'] = $disputeId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\DisputeResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/dispute-management/v1/disputes/{disputeId}/submit-evidence'),
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
