<?php
namespace Worldline\Acquiring\Sdk\Authentication;

use PHPUnit\Framework\TestCase;

/**
 * @group authentication
 *
 */
class OAuth2ScopesTest extends TestCase
{
    function testAll()
    {
        $allScopes = OAuth2Scopes::all();
        $this->assertContains("processing_payment", $allScopes);
        $this->assertContains("processing_dcc_rate", $allScopes);
        $this->assertContains("services_ping", $allScopes);

        $allScopesString = implode(" ", $allScopes);
        $this->assertLessThanOrEqual(260, strlen($allScopesString));
    }

    function testForV1()
    {
        $scopes = OAuth2Scopes::forApiVersion("v1");
        $this->assertContains("processing_payment", $scopes);
        $this->assertContains("processing_dcc_rate", $scopes);
        $this->assertContains("services_ping", $scopes);
    }

    function testForUnknownApiVersion()
    {
        $scopes = OAuth2Scopes::forApiVersion("v-1");
        $this->assertEquals([], $scopes);
    }

    function testForV1ProcessPayment()
    {
        $scopes = OAuth2Scopes::forOperation("v1", "processPayment");
        $this->assertContains("processing_payment", $scopes);
    }

    function testForV1RequestDccRate()
    {
        $scopes = OAuth2Scopes::forOperation("v1", "requestDccRate");
        $this->assertContains("processing_dcc_rate", $scopes);
    }

    function testForUnknownOperation()
    {
        $scopes = OAuth2Scopes::forOperation("v1", "unknown");
        $this->assertEquals([], $scopes);
    }

    function testForOperationOfUnknownApiVersion()
    {
        $scopes = OAuth2Scopes::forOperation("v-1", "processPayment");
        $this->assertEquals([], $scopes);
    }

    function testForV1Operations()
    {
        $scopes = OAuth2Scopes::forOperations("v1", "processPayment", "requestDccRate", "unknown");
        $this->assertContains("processing_payment", $scopes);
        $this->assertContains("processing_dcc_rate", $scopes);
        $this->assertNotContains("services_ping", $scopes);
    }

    function testForOperationsOfUnknownApiVersion()
    {
        $scopes = OAuth2Scopes::forOperations("v-1", "processPayment", "requestDccRate");
        $this->assertEquals([], $scopes);
    }

    function testForFilteredOperations()
    {
        $operationIds = ["processPayment", "requestDccRate", "unknown"];
        $filter = function ($apiVersion, $operationId) use ($operationIds) {
            return $apiVersion === "v1" && in_array($operationId, $operationIds);
        };
        $scopes = OAuth2Scopes::forFilteredOperations($filter);
        $this->assertContains("processing_payment", $scopes);
        $this->assertContains("processing_dcc_rate", $scopes);
        $this->assertNotContains("services_ping", $scopes);
    }
}
