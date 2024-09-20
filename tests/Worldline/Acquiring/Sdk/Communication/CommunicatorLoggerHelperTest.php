<?php
namespace Worldline\Acquiring\Sdk\Communication;

use PHPUnit\Framework\TestCase;

/**
 * @group obfuscation
 */
class CommunicatorLoggerHelperTest extends TestCase
{
    /**
     * @dataProvider uriProvider
     * @param string $requestUri
     * @param string $endpoint
     * @param string $relativeUriPathWithRequestParameters
     */
    public function testUriSplitting($requestUri, $endpoint, $relativeUriPathWithRequestParameters)
    {
        $communicatorLoggingHelper = new CommunicatorLoggerHelper();
        $this->assertEquals($endpoint, $communicatorLoggingHelper->getEndpoint($requestUri));
        $this->assertEquals(
            $relativeUriPathWithRequestParameters,
            $communicatorLoggingHelper->getRelativeUriPathWithRequestParameters($requestUri)
        );
        $this->assertEquals($requestUri, $endpoint . $relativeUriPathWithRequestParameters);
    }

    /**
     * @return array
     */
    public function uriProvider()
    {
        return array(
            array(
                'https://api.preprod.acquiring.worldline-solutions.com/services/v1/100812/520000214/dcc-rates',
                'https://api.preprod.acquiring.worldline-solutions.com',
                '/services/v1/100812/520000214/dcc-rates',
            ),
            array(
                'https://api.preprod.acquiring.worldline-solutions.com/services/v1/100812/520000214/dcc-rates?source=EUR&target=USD&amount=1000',
                'https://api.preprod.acquiring.worldline-solutions.com',
                '/services/v1/100812/520000214/dcc-rates?source=EUR&target=USD&amount=1000',
            ),
            array(
                'https://api.preprod.acquiring.worldline-solutions.com',
                'https://api.preprod.acquiring.worldline-solutions.com',
                ''
            ),
            array(
                '/services/v1/100812/520000214/dcc-rates',
                '',
                '/services/v1/100812/520000214/dcc-rates'
            ),
        );
    }
}
