<?php
namespace Worldline\Acquiring\Sdk;

use Exception;

/**
 * Class TestCase
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    private $configFilePath;

    /**
     * @var JsonValuesStore|null
     */
    private $jsonValuesStore = null;

    /**
     *
     */
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->configFilePath = dirname(__FILE__) . '/../../../config.json';
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getMerchantId()
    {
        return $this->getJsonValuesStore()->getValue('merchant_id');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getAcquirerId()
    {
        return $this->getJsonValuesStore()->getValue('acquirer_id');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiEndpoint()
    {
        return $this->getJsonValuesStore()->getValue('api_endpoint');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyHost()
    {
        return $this->getJsonValuesStore()->getValue('proxy_host', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyPort()
    {
        return $this->getJsonValuesStore()->getValue('proxy_port', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyUsername()
    {
        return $this->getJsonValuesStore()->getValue('proxy_username', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyPassword()
    {
        return $this->getJsonValuesStore()->getValue('proxy_password', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getOAuth2ClientId()
    {
        return $this->getJsonValuesStore()->getValue('oauth2_client_id', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getOAuth2ClientSecret()
    {
        return $this->getJsonValuesStore()->getValue('oauth2_client_secret', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getOAuth2TokenUri()
    {
        return $this->getJsonValuesStore()->getValue('oauth2_token_uri', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getHttpBinUrl()
    {
        $httpBinUrl = $this->getJsonValuesStore()->getValue('httpbin_url', false);
        if (is_null($httpBinUrl)) {
            $httpBinUrl = 'http://httpbin.org';
        }
        return $httpBinUrl;
    }

    /**
     * @return JsonValuesStore
     */
    protected function getJsonValuesStore()
    {
        if (is_null($this->jsonValuesStore)) {
            $this->jsonValuesStore = new JsonValuesStore($this->configFilePath);
        }
        return $this->jsonValuesStore;
    }

    /**
     * @return CommunicatorConfiguration
     */
    protected function getCommunicatorConfiguration()
    {
        return new CommunicatorConfiguration(
            $this->getOAuth2ClientId(),
            $this->getOAuth2ClientSecret(),
            $this->getApiEndpoint(),
            'Worldline'
        );
    }

    protected function uuid() {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    protected function skipWithoutHttpBin() {
        if (!$this->getHttpBinUrl()) {
            $this->markTestSkipped('Testing with httpbin not possible');
        }
    }
}
