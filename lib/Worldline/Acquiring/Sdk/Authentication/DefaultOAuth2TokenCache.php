<?php
namespace Worldline\Acquiring\Sdk\Authentication;

/**
 * Class DefaultOAuth2TokenCache
 *
 * @package Worldline\Acquiring\Sdk\Authentication
 */
class DefaultOAuth2TokenCache implements OAuth2TokenCache
{
    const OAUTH2_ACCESS_TOKEN_PREFIX = 'acquiring.api.oauth2.access-token';
    const EXPIRATION_TIMESTAMP_PREFIX = 'acquiring.api.oauth2.expiration-timestamp';

    /** @var array<string, string> */
    private $array;

    /**
     * @param array<string, string>$array an array in which the cached OAuth2 access token and expiration timestamp will be stored.
     */
    public function __construct(&$array = array())
    {
        $this->array = &$array;
    }

    /**
     * @param string $tokenIdentifier An identifier for the access token, derived from the URI path.
     * @return string|null The currently cached OAuth2 access token, or null if not set or expired.
     */
    public function getOAuth2AccessToken(string $tokenIdentifier)
    {
        $accessTokenKey = $this->addPrefix($tokenIdentifier, self::OAUTH2_ACCESS_TOKEN_PREFIX);
        $timestampKey = $this->addPrefix($tokenIdentifier, self::EXPIRATION_TIMESTAMP_PREFIX);
        if (isset($this->array[$accessTokenKey]) && isset($this->array[$timestampKey])) {
            $expirationTimestamp = intval($this->array[$timestampKey]);
            if ($expirationTimestamp > time()) {
                return $this->array[$accessTokenKey];
            }
        }
        return null;
    }

    /**
     * @param string $tokenIdentifier An identifier for the access token, derived from the URI path.
     * @param string $oauth2AccessToken The OAuth2 access token to store.
     * @param int $expirationTimestamp The timestamp the OAuth2 access token expires, as a number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
     */
    public function storeOAuth2AccessToken($tokenIdentifier, $oauth2AccessToken, $expirationTimestamp)
    {
        $this->array[$this->addPrefix($tokenIdentifier, self::OAUTH2_ACCESS_TOKEN_PREFIX)] = $oauth2AccessToken;
        $this->array[$this->addPrefix($tokenIdentifier, self::EXPIRATION_TIMESTAMP_PREFIX)] = strval($expirationTimestamp);
    }

    private function addPrefix($tokenIdentifier, $prefix)
    {
        if (!$tokenIdentifier) {
            return $prefix;
        }
        return $prefix . '/' . $tokenIdentifier;
    }
}
