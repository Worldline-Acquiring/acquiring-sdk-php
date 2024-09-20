<?php
namespace Worldline\Acquiring\Sdk\Authentication;

/**
 * Class Authenticator
 *
 * @package Worldline\Acquiring\Sdk\Authentication
 */
interface Authenticator
{
    /**
     * @param string $httpMethod
     * @param string $uriPath
     * @param array<string, string> $requestHeaders
     * @return string The full value for the Authorization header
     */
    public function getAuthorization($httpMethod, $uriPath, $requestHeaders);
}
