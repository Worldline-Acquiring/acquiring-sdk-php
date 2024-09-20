<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1;

use Worldline\Acquiring\Sdk\CallContext;
use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * Class ExceptionFactory
 *
 * @package Worldline\Acquiring\Sdk\V1
 */
class ExceptionFactory
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $errorObject
     * @param CallContext $callContext
     * @return ApiException
     */
    public function createException(
        $httpStatusCode,
        DataObject $errorObject,
        CallContext $callContext = null
    ) {
        if ($httpStatusCode === 400) {
            return new ValidationException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 403) {
            return new AuthorizationException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 404) {
            return new ReferenceException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 409) {
            return new ReferenceException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 410) {
            return new ReferenceException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 500) {
            return new PlatformException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 502) {
            return new PlatformException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 503) {
            return new PlatformException($httpStatusCode, $errorObject);
        }
        return new ApiException($httpStatusCode, $errorObject);
    }
}
