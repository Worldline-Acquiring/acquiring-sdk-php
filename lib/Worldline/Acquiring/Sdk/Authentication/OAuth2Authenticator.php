<?php
namespace Worldline\Acquiring\Sdk\Authentication;

use InvalidArgumentException;
use stdClass;
use Worldline\Acquiring\Sdk\Communication\Connection;
use Worldline\Acquiring\Sdk\Communication\DefaultConnection;
use Worldline\Acquiring\Sdk\Communication\ResponseBuilder;
use Worldline\Acquiring\Sdk\CommunicatorConfiguration;
use Worldline\Acquiring\Sdk\JSON\JSONUtil;

/**
 * Class OAuth2Authenticator
 *
 * @package Worldline\Acquiring\Sdk\Authentication
 */
class OAuth2Authenticator implements Authenticator
{
    /** @var string */
    private $oauth2TokenUri;

    /** @var string */
    private $oauth2ClientId;

    /** @var string */
    private $oauth2ClientSecret;

    /** @var stdClass|null */
    private $customTokenType;

    /** @var array */
    private $tokenTypesPerPath;

    /** @var OAuth2TokenCache */
    private $tokenCache;

    /** @var CommunicatorConfiguration */
    private $communicatorConfiguration;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     * @param string $oauth2TokenUri
     * @param OAuth2TokenCache|null $tokenCache
     */
    public function __construct(
        CommunicatorConfiguration $communicatorConfiguration,
        $oauth2TokenUri,
        OAuth2TokenCache $tokenCache = null
    ) {
        $this->communicatorConfiguration = $communicatorConfiguration;
        $this->oauth2TokenUri = $oauth2TokenUri;
        $this->oauth2ClientId = $communicatorConfiguration->getOAuth2ClientId();
        $this->oauth2ClientSecret = $communicatorConfiguration->getOAuth2ClientSecret();
        $this->tokenCache = $tokenCache ?: new DefaultOAuth2TokenCache();

        $oauth2Scopes = $communicatorConfiguration->getOAuth2Scopes();
        $this->customTokenType = $oauth2Scopes ? OAuth2Authenticator::createTokenType($oauth2Scopes) : null;
        // Only a limited amount of scopes may be sent in one request.
        // While at the moment all scopes fit in one request, keep this code so we can easily add more token types if necessary.
        // The empty path will ensure that all paths will match, as each full path ends with an empty string.
        $this->tokenTypesPerPath = [
            '' => OAuth2Authenticator::createTokenType(join(' ', OAuth2Scopes::all())),
        ];
    }

    /**
     * @param string $httpMethod
     * @param string $uriPath
     * @param string[] $requestHeaders
     * @return string
     */
    public function getAuthorization($httpMethod, $uriPath, $requestHeaders)
    {
        $tokenType = $this->customTokenType ?: $this->getTokenType($uriPath);
        $tokenIdentifier = $tokenType->tokenIdentifier;

        $oauth2AccessToken = $this->tokenCache->getOAuth2AccessToken($tokenIdentifier);
        if ($oauth2AccessToken) {
            return 'Bearer ' . $oauth2AccessToken;
        }

        $startTime = time();

        $oauth2RequestHeaders = array();
        $oauth2RequestHeaders['Content-Type'] = 'application/x-www-form-urlencoded';

        $oauth2Scopes = $tokenType->scopes;

        $requestBody = sprintf('grant_type=client_credentials&client_id=%s&client_secret=%s&scope=%s', $this->oauth2ClientId, $this->oauth2ClientSecret, $oauth2Scopes);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $connection = $this->createConnection();
        $connection->post($this->oauth2TokenUri, $oauth2RequestHeaders, $requestBody, $responseHandler);

        $response = $responseBuilder->getResponse();

        $responseObject = JSONUtil::decode($response->getBody());

        if ($response->getHttpStatusCode() !== 200) {
            if (property_exists($responseObject, 'error_description')) {
                throw new OAuth2Exception(sprintf(
                    'There was an error while retrieving the OAuth2 access token: %s - %s',
                    $responseObject->error,
                    $responseObject->error_description
                ));
            }
            throw new OAuth2Exception(sprintf(
                'There was an error while retrieving the OAuth2 access token: %s',
                $responseObject->error
            ));
        }
        $oauth2AccessToken = $responseObject->access_token;
        $expirationTimestamp = $startTime + $responseObject->expires_in;
        $this->tokenCache->storeOAuth2AccessToken($tokenIdentifier, $oauth2AccessToken, $expirationTimestamp);

        return 'Bearer ' . $oauth2AccessToken;
    }

    /**
     * @return Connection
     */
    protected function createConnection()
    {
        return new DefaultConnection($this->communicatorConfiguration);
    }

    private function getTokenType($fullPath)
    {
        foreach ($this->tokenTypesPerPath as $path => $tokenType) {
            if (self::endsWith($fullPath, $path) || self::contains($fullPath, $path . '/')) {
                return $tokenType;
            }
        }

        throw new InvalidArgumentException("Scope could not be found for path $fullPath");
    }

    private static function endsWith($haystack, $needle)
    {
        return substr_compare($haystack, $needle, -strlen($needle)) === 0;
    }

    private static function contains($haystack, $needle)
    {
        return strpos($haystack, $needle) !== false;
    }

    private static function createTokenType($oauth2Scopes)
    {
        $tokenType = new stdClass();
        $tokenType->scopes = $oauth2Scopes;
        $tokenType->tokenIdentifier = hash('sha256', $tokenType->scopes);
        return $tokenType;
    }
}
