<?php
namespace Worldline\Acquiring\Sdk\TestUtil;

use Worldline\Acquiring\Sdk\Authentication\Authenticator;

class TestingAuthenticator implements Authenticator
{
    /** @var string */
    private $authorization;

    /**
     * @param string $authorization
     */
    public function __construct($authorization = '')
    {
        $this->authorization = $authorization;
    }

    public function getAuthorization($httpMethod, $uriPath, $requestHeaders)
    {
        return $this->authorization;
    }
}
