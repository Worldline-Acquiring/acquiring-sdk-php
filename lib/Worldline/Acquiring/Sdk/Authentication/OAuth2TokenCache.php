<?php
namespace Worldline\Acquiring\Sdk\Authentication;

/**
 * Class OAuth2TokenCache
 *
 * @package Worldline\Acquiring\Sdk\Authentication
 */
interface OAuth2TokenCache
{
    /**
     * @param string $tokenType The token type that was derived from the URI path.
     * @return string|null The currently cached OAuth2 access token, or null if not set or expired.
     */
    public function getOAuth2AccessToken(string $tokenType);

    /**
     * @param string $tokenType The tokenType that was derived from the uriPath
     * @param string $oauth2AccessToken The OAuth2 access token to store.
     * @param int $expirationTimestamp The timestamp the OAuth2 access token expires, as a number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
     */
    public function storeOAuth2AccessToken($tokenType, $oauth2AccessToken, $expirationTimestamp);
}
