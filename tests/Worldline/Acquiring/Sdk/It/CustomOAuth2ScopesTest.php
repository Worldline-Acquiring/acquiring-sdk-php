<?php

use Worldline\Acquiring\Sdk\Authentication\OAuth2Exception;
use Worldline\Acquiring\Sdk\ClientTestCase;
use Worldline\Acquiring\Sdk\V1\AuthorizationException;

/**
 * @group integration
 *
 */
class CustomOAuth2ScopesTest extends ClientTestCase
{
    /**
     * @dataProvider validOAuth2ScopesProvider
     * @param string $oauth2Scopes
     */
    public function testWithValidScopes($oauth2Scopes)
    {
        $client = $this->getClientWithCustomScopes($oauth2Scopes);

        $dccRateRequest = $this->getGetDCCRateRequest();
        $dccRateResponse = $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->dynamicCurrencyConversion()->requestDccRate($dccRateRequest);

        $this->assertDccRateResponse($dccRateRequest, $dccRateResponse);
    }

    /**
     * @return array
     */
    public function validOAuth2ScopesProvider()
    {
        return array(
            array('processing_dcc_rate'),
            array('processing_dcc_rate services_ping'),
            array(''),
            array(null),
        );
    }

    public function testWithMissingScopes()
    {
        $client = $this->getClientWithCustomScopes('services_ping');

        $dccRateRequest = $this->getGetDCCRateRequest();
        try {
            $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->dynamicCurrencyConversion()->requestDccRate($dccRateRequest);
            $this->fail('Expected AuthorizationException not thrown');
        } catch (AuthorizationException $e) {
            // expected
            $this->assertEquals(403, $e->getHttpStatusCode());
        }
    }

    public function testWithInvalidScope()
    {
        $client = $this->getClientWithCustomScopes('processing_dcc_rate invalid_scope');

        $dccRateRequest = $this->getGetDCCRateRequest();
        try {
            $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->dynamicCurrencyConversion()->requestDccRate($dccRateRequest);
            $this->fail('Expected OAuth2Exception not thrown');
        } catch (OAuth2Exception $e) {
            // expected
            $this->assertStringStartsWith('There was an error while retrieving the OAuth2 access token: invalid_scope', $e->getMessage());
        }
    }
}
