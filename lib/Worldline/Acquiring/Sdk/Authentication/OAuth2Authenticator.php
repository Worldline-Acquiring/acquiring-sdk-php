<?php
namespace Worldline\Acquiring\Sdk\Authentication;

use InvalidArgumentException;
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
    // Only a limited amount of scopes may be sent in one request.
    // While at the moment all scopes fit in one request, keep this code so we can easily add more token types if necessary.
    // The empty path will ensure that all paths will match, as each full path ends with an empty string.
    private const TOKEN_TYPES = [
        '' => [
            'processing_payment', 'processing_refund', 'processing_credittransfer', 'processing_accountverification',
            'processing_operation_reverse', 'processing_dcc_rate', 'services_ping'
        ],
    ];

    /** @var string */
    private $oauth2TokenUri;

    /** @var string */
    private $oauth2ClientId;

    /** @var string */
    private $oauth2ClientSecret;

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
    }

    /**
     * @param string $httpMethod
     * @param string $uriPath
     * @param string[] $requestHeaders
     * @return string
     */
    public function getAuthorization($httpMethod, $uriPath, $requestHeaders)
    {
        $tokenType = self::getTokenType($uriPath);
        $oauth2AccessToken = $this->tokenCache->getOAuth2AccessToken($tokenType);
        if ($oauth2AccessToken) {
            return 'Bearer ' . $oauth2AccessToken;
        }

        $startTime = time();

        $requestHeaders = array();
        $requestHeaders['Content-Type'] = 'application/x-www-form-urlencoded';

        $requestBody = sprintf('grant_type=client_credentials&client_id=%s&client_secret=%s&scope=%s', $this->oauth2ClientId, $this->oauth2ClientSecret, self::getScopes($tokenType));

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $connection = $this->createConnection();
        $connection->post($this->oauth2TokenUri, $requestHeaders, $requestBody, $responseHandler);

        $response = $responseBuilder->getResponse();

        $responseObject = JSONUtil::decode($response->getBody());

        if ($response->getHttpStatusCode() !== 200) {
            throw new OAuth2Exception(sprintf(
                'There was an error while retrieving the OAuth2 access token: %s - %s',
                $responseObject->error,
                $responseObject->error_description
            ));
        }
        $oauth2AccessToken = $responseObject->access_token;
        $expirationTimestamp = $startTime + $responseObject->expires_in;
        $this->tokenCache->storeOAuth2AccessToken($tokenType, $oauth2AccessToken, $expirationTimestamp);

        return 'Bearer ' . $oauth2AccessToken;
    }

    /**
     * @return Connection
     */
    protected function createConnection()
    {
        return new DefaultConnection($this->communicatorConfiguration);
    }

    private static function getTokenType($fullPath)
    {
        foreach (self::TOKEN_TYPES as $tokenType => $scopes) {
            if (self::endsWith($fullPath, $tokenType) || self::contains($fullPath, $tokenType . '/')) {
                return $tokenType;
            }
        }

        throw new InvalidArgumentException("Scope could not be found for path $fullPath");
    }

    private static function getScopes($tokenType)
    {
        if (!array_key_exists($tokenType, self::TOKEN_TYPES)) {
            throw new InvalidArgumentException("Token type $tokenType does not exist.");
        }

        return join(" ", self::TOKEN_TYPES[$tokenType]);
    }

    private static function endsWith($haystack, $needle)
    {
        return substr_compare($haystack, $needle, -strlen($needle)) === 0;
    }

    private static function contains($haystack, $needle)
    {
        return strpos($haystack, $needle) !== false;
    }
}
