<?php
namespace Worldline\Acquiring\Sdk;

use UnexpectedValueException;
use Worldline\Acquiring\Sdk\Domain\ShoppingCartExtension;

/**
 * Class CommunicatorConfiguration
 *
 * @package Worldline\Acquiring\Sdk
 */
class CommunicatorConfiguration
{
    /**
     * @var string
     */
    private $authorizationId;

    /**
     * @var string
     */
    private $authorizationSecret;

    /**
     * @var string
     */
    private $apiEndpoint;

    /**
     * @var int
     */
    private $connectTimeout;

    /**
     * @var int
     */
    private $readTimeout;

    /**
     * @var ProxyConfiguration|null
     */
    private $proxyConfiguration;

    /**
     * @var string
     */
    private $integrator;

    /**
     * @var ShoppingCartExtension|null
     */
    private $shoppingCartExtension = null;

    /**
     * @param string $authorizationId
     * @param string $authorizationSecret
     * @param string $apiEndpoint
     * @param string $integrator
     * @param ProxyConfiguration|null $proxyConfiguration
     * @param int $connectTimeout
     * @param int $readTimeout
     */
    public function __construct(
        $authorizationId,
        $authorizationSecret,
        $apiEndpoint,
        $integrator,
        ProxyConfiguration $proxyConfiguration = null,
        $connectTimeout = -1,
        $readTimeout = -1)
    {
        $this->validateApiEndpoint($apiEndpoint);
        $this->validateIntegrator($integrator);
        $this->authorizationId = $authorizationId;
        $this->authorizationSecret = $authorizationSecret;
        $this->apiEndpoint = $apiEndpoint;
        $this->integrator = $integrator;
        $this->proxyConfiguration = $proxyConfiguration;
        $this->connectTimeout = $connectTimeout;
        $this->readTimeout = $readTimeout;
    }

    private function validateApiEndpoint($apiEndpoint)
    {
        $url = parse_url($apiEndpoint);
        if ($url === FALSE) {
            throw new UnexpectedValueException('apiEndpoint is not a valid URL');
        } else if (isset($url['path']) && $url['path'] !== '') {
            throw new UnexpectedValueException('apiEndpoint should not contain a path');
        } else if (isset($url['user']) || isset($url['query']) || isset($url['fragment'])) {
            throw new UnexpectedValueException('apiEndpoint should not contain user info, query or fragment');
        }
    }

    private function validateIntegrator($integrator)
    {
        if (is_null($integrator) || strlen(trim($integrator)) == 0) {
            throw new UnexpectedValueException("integrator is required");
        }
    }

    /**
     * @return string An id used for authorization. This can be an OAuth2 client id, or something else.
     */
    public function getAuthorizationId()
    {
        return $this->authorizationId;
    }

    /**
     * @param string $authorizationId
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->authorizationId = $authorizationId;
    }

    /**
     * @return string A secret used for authorization. This can be an OAuth2 client secret, or something else.
     */
    public function getAuthorizationSecret()
    {
        return $this->authorizationSecret;
    }

    /**
     * @param string $authorizationSecret
     */
    public function setAuthorizationSecret($authorizationSecret)
    {
        $this->authorizationSecret = $authorizationSecret;
    }

    /**
     * This method is an alias for getAuthorizationId.
     * @return string
     */
    public function getOAuth2ClientId()
    {
        return $this->getAuthorizationId();
    }

    /**
     * This method is an alias for setAuthorizationId.
     * @param string $oauth2ClientId
     */
    public function setOAuth2ClientId($oauth2ClientId)
    {
        $this->setAuthorizationId($oauth2ClientId);
    }

    /**
     * This method is an alias for getAuthorizationSecret.
     * @return string
     */
    public function getOAuth2ClientSecret()
    {
        return $this->getAuthorizationSecret();
    }

    /**
     * This method is an alias for setAuthorizationSecret.
     * @param string $oauth2ClientSecret
     */
    public function setOAuth2ClientSecret($oauth2ClientSecret)
    {
        $this->setAuthorizationSecret($oauth2ClientSecret);
    }

    /**
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }

    /**
     * @param string $apiEndpoint
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->validateApiEndpoint($apiEndpoint);
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * @return ProxyConfiguration|null
     */
    public function getProxyConfiguration()
    {
        return $this->proxyConfiguration;
    }

    /**
     * @param ProxyConfiguration|null $proxyConfiguration
     */
    public function setProxyConfiguration(ProxyConfiguration $proxyConfiguration = null)
    {
        $this->proxyConfiguration = $proxyConfiguration;
    }

    /**
     * @return int
     */
    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    /**
     * @param int $connectTimeout
     */
    public function setConnectTimeout($connectTimeout)
    {
        $this->connectTimeout = $connectTimeout;
    }

    /**
     * @return int
     */
    public function getReadTimeout()
    {
        return $this->readTimeout;
    }

    /**
     * @param int $readTimeout
     */
    public function setReadTimeout($readTimeout)
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @return string
     */
    public function getIntegrator()
    {
        return $this->integrator;
    }

    /**
     * @param string $integrator
     */
    public function setIntegrator($integrator)
    {
        $this->validateIntegrator($integrator);
        $this->integrator = $integrator;
    }

    /**
     * @return ShoppingCartExtension|null
     */
    public function getShoppingCartExtension()
    {
        return $this->shoppingCartExtension;
    }

    /**
     * @param ShoppingCartExtension|null $shoppingCartExtension
     */
    public function setShoppingCartExtension(ShoppingCartExtension $shoppingCartExtension = null)
    {
        $this->shoppingCartExtension = $shoppingCartExtension;
    }
}
