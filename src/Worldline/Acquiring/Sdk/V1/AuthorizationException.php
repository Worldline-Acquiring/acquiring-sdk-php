<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1;

use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * Class AuthorizationException
 *
 * @package Worldline\Acquiring\Sdk\V1
 */
class AuthorizationException extends ApiException
{
    /**
     * @param int         $httpStatusCode
     * @param DataObject  $response
     * @param string|null $message
     */
    public function __construct(int $httpStatusCode, DataObject $response, ?string $message = null)
    {
        if (is_null($message)) {
            $message = 'The Worldline Acquiring platform returned an API authorization error response';
        }
        parent::__construct($httpStatusCode, $response, $message);
    }
}
