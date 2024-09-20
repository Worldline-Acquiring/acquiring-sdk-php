<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1;

use Worldline\Acquiring\Sdk\Domain\DataObject;

/**
 * Class PlatformException
 *
 * @package Worldline\Acquiring\Sdk\V1
 */
class PlatformException extends ApiException
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The Worldline Acquiring platform returned an error response';
        }
        parent::__construct($httpStatusCode, $response, $message);
    }
}
