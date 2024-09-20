<?php
namespace Worldline\Acquiring\Sdk\Authentication;

use Worldline\Acquiring\Sdk\Communication\ConnectionResponse;
use Worldline\Acquiring\Sdk\CommunicatorConfiguration;
use Worldline\Acquiring\Sdk\TestCase;
use Worldline\Acquiring\Sdk\TestUtil\TestingConnection;

/**
 * @group authentication
 *
 */
class OAuth2AuthenticatorTest extends TestCase
{
    public function testGetAuthorization()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $tokenCache = new DefaultOAuth2TokenCache();
        $responseBody = <<<EOD
{
  "access_token": "accessToken",
  "expires_in": 300
}
EOD;
        $response = new ConnectionResponse(200, array('Content-Type' => 'application/json'), $responseBody);

        $authenticator = new TestOAuth2Authenticator($configuration, $tokenCache, $response);

        for ($i = 0; $i < 10; $i++) {
            $authorization = $authenticator->getAuthorization('', '/operations', array());

            $this->assertEquals('Bearer accessToken', $authorization);
        }

        $this->assertEquals(1, $authenticator->getConnectionCount());
    }

    public function testGetAuthorizationWithInvalidClient()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $tokenCache = new DefaultOAuth2TokenCache();
        $responseBody = <<<EOD
{
  "error": "unauthorized_client",
  "error_description": "INVALID_CREDENTIALS: Invalid client credentials"
}
EOD;
        $response = new ConnectionResponse(401, array('Content-Type' => 'application/json'), $responseBody);

        $authenticator = new TestOAuth2Authenticator($configuration, $tokenCache, $response);

        for ($i = 0; $i < 10; $i++) {
            try {
                $authenticator->getAuthorization('', '/operations', array());
                $this->fail('An expected exception has not been raised');
            } catch (OAuth2Exception $e) {
                $this->assertEquals(
                    'There was an error while retrieving the OAuth2 access token: unauthorized_client - INVALID_CREDENTIALS: Invalid client credentials',
                    $e->getMessage()
                );
            }
        }

        $this->assertEquals(10, $authenticator->getConnectionCount());
    }

    public function testGetAuthorizationWithExpiredToken()
    {
        $configuration = $this->getCommunicatorConfiguration();
        $tokenCache = new DefaultOAuth2TokenCache();
        $responseBody = <<<EOD
{
  "access_token": "expiredAccessToken",
  "expires_in": -1
}
EOD;
        $response = new ConnectionResponse(200, array('Content-Type' => 'application/json'), $responseBody);

        $authenticator = new TestOAuth2Authenticator($configuration, $tokenCache, $response);

        for ($i = 0; $i < 10; $i++) {
            $authorization = $authenticator->getAuthorization('', '/operations', array());

            $this->assertEquals('Bearer expiredAccessToken', $authorization);
        }

        $this->assertEquals(10, $authenticator->getConnectionCount());
    }

    public function testGetAuthorizationWithExternalArray()
    {
        $array = array();

        $configuration = $this->getCommunicatorConfiguration();
        $tokenCache = new DefaultOAuth2TokenCache($array);
        $responseBody = <<<EOD
{
  "access_token": "accessToken",
  "expires_in": 300
}
EOD;
        $response = new ConnectionResponse(200, array('Content-Type' => 'application/json'), $responseBody);

        $authenticator = new TestOAuth2Authenticator($configuration, $tokenCache, $response);

        for ($i = 0; $i < 10; $i++) {
            $authorization = $authenticator->getAuthorization('', '/operations', array());

            $this->assertEquals('Bearer accessToken', $authorization);
        }

        $this->assertEquals(1, $authenticator->getConnectionCount());

        $matchedPath = '';
        $this->assertArrayHasKey(DefaultOAuth2TokenCache::OAUTH2_ACCESS_TOKEN_PREFIX . $matchedPath, $array);
        $this->assertArrayHasKey(DefaultOAuth2TokenCache::EXPIRATION_TIMESTAMP_PREFIX . $matchedPath, $array);
        $this->assertEquals('accessToken', $array[DefaultOAuth2TokenCache::OAUTH2_ACCESS_TOKEN_PREFIX . $matchedPath]);
    }
}

class TestOAuth2Authenticator extends OAuth2Authenticator
{
    private $response;
    private $connectionCount;

    public function __construct(CommunicatorConfiguration $configuration, OAuth2TokenCache $tokenCache, ConnectionResponse $response)
    {
        parent::__construct($configuration, 'http://localhost/test', $tokenCache);
        $this->response = $response;
        $this->connectionCount = 0;
    }

    protected function createConnection()
    {
        $this->connectionCount++;
        return new TestingConnection($this->response);
    }

    public function getConnectionCount()
    {
        return $this->connectionCount;
    }
}
