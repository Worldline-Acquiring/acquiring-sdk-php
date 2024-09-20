<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Accountverifications\AccountVerificationsClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Dynamiccurrencyconversion\DynamicCurrencyConversionClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Payments\PaymentsClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Refunds\RefundsClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Technicalreversals\TechnicalReversalsClient;

/**
 * Merchant client.
 */
class MerchantClient extends ApiResource
{
    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments
     *
     * @return PaymentsClient
     */
    public function payments()
    {
        return new PaymentsClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/refunds
     *
     * @return RefundsClient
     */
    public function refunds()
    {
        return new RefundsClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/account-verifications
     *
     * @return AccountVerificationsClient
     */
    public function accountVerifications()
    {
        return new AccountVerificationsClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/operations/{operationId}/reverse
     *
     * @return TechnicalReversalsClient
     */
    public function technicalReversals()
    {
        return new TechnicalReversalsClient($this, $this->context);
    }

    /**
     * Resource /services/v1/{acquirerId}/{merchantId}/dcc-rates
     *
     * @return DynamicCurrencyConversionClient
     */
    public function dynamicCurrencyConversion()
    {
        return new DynamicCurrencyConversionClient($this, $this->context);
    }
}
