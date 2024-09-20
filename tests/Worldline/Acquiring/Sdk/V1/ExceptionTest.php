<?php
namespace Worldline\Acquiring\Sdk\V1;

use Worldline\Acquiring\Sdk\ClientTestCase;
use Worldline\Acquiring\Sdk\V1\Domain\ApiPaymentRequest;

/**
 * @group exceptions
 */
class ExceptionTest extends ClientTestCase
{
    /**
     *
     */
    public function testException()
    {
        try {
            $client = $this->getClient();
            $client->v1()->acquirer($this->getAcquirerId())->merchant($this->getMerchantId())->payments()->processPayment(new ApiPaymentRequest());
        } catch (ValidationException $e) {
            $this->assertEquals(400, $e->getHttpStatusCode());
            return;
        }
    }
}
