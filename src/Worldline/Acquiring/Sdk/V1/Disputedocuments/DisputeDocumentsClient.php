<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Disputedocuments;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Communication\ErrorResponseException;
use Worldline\Acquiring\Sdk\Communication\InvalidResponseException;
use Worldline\Acquiring\Sdk\Communication\ResponseClassMap;
use Worldline\Acquiring\Sdk\V1\ApiException;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;
use Worldline\Acquiring\Sdk\V1\Domain\UploadDocumentResponse;
use Worldline\Acquiring\Sdk\V1\ExceptionFactory;
use Worldline\Acquiring\Sdk\V1\PlatformException;
use Worldline\Acquiring\Sdk\V1\ReferenceException;
use Worldline\Acquiring\Sdk\V1\ValidationException;

/**
 * DisputeDocuments client.
 *
 * @package Worldline\Acquiring\Sdk\V1\Disputedocuments
 */
class DisputeDocumentsClient extends ApiResource
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /dispute-management/v1/documents - Upload Dispute Document
     *
     * @param UploadDisputeDocumentRequest $body
     * @param CallContext|null             $callContext
     *
     * @return UploadDocumentResponse
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Documents/operation/uploadDisputeDocument Upload Dispute Document
     */
    public function uploadDisputeDocument(UploadDisputeDocumentRequest $body, ?CallContext $callContext = null): UploadDocumentResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\UploadDocumentResponse';
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/dispute-management/v1/documents'),
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
     * Resource /dispute-management/v1/disputes/{disputeId}/documents/{documentId} - Retrieve Dispute Document
     *
     * @param string           $disputeId
     * @param string           $documentId
     * @param callable         $bodyHandler Callable accepting a response body chunk and the response headers
     * @param CallContext|null $callContext
     *
     * @return void
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     * @link   https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Documents/operation/getDisputeDocument Retrieve Dispute Document
     */
    public function getDisputeDocument(string $disputeId, string $documentId, callable $bodyHandler, ?CallContext $callContext = null): void
    {
        $this->context['disputeId'] = $disputeId;
        $this->context['documentId'] = $documentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = '\Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentErrorResponse';
        try {
            $this->getCommunicator()->getWithBinaryResponse(
                $bodyHandler,
                $responseClassMap,
                $this->instantiateUri('/dispute-management/v1/disputes/{disputeId}/documents/{documentId}'),
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
