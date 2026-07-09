<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant;

use Worldline\Acquiring\Sdk\ApiResource;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Accountverifications\AccountVerificationsClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Balanceinquiries\BalanceInquiriesClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardpayments\CardPaymentsClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardrefunds\CardRefundsClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Dynamiccurrencyconversion\DynamicCurrencyConversionClient;
use Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Technicalreversals\TechnicalReversalsClient;

/**
 * Merchant client.
 *
 * @package Worldline\Acquiring\Sdk\V1\Acquirer\Merchant
 */
class MerchantClient extends ApiResource
{
    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/payments
     *
     * @return CardPaymentsClient
     */
    public function cardPayments(): CardPaymentsClient
    {
        return new CardPaymentsClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/refunds
     *
     * @return CardRefundsClient
     */
    public function cardRefunds(): CardRefundsClient
    {
        return new CardRefundsClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/account-verifications
     *
     * @return AccountVerificationsClient
     */
    public function accountVerifications(): AccountVerificationsClient
    {
        return new AccountVerificationsClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/balance-inquiries
     *
     * @return BalanceInquiriesClient
     */
    public function balanceInquiries(): BalanceInquiriesClient
    {
        return new BalanceInquiriesClient($this, $this->context);
    }

    /**
     * Resource /processing/v1/{acquirerId}/{merchantId}/operations/{operationId}/reverse
     *
     * @return TechnicalReversalsClient
     */
    public function technicalReversals(): TechnicalReversalsClient
    {
        return new TechnicalReversalsClient($this, $this->context);
    }

    /**
     * Resource /services/v1/{acquirerId}/{merchantId}/dcc-rates
     *
     * @return DynamicCurrencyConversionClient
     */
    public function dynamicCurrencyConversion(): DynamicCurrencyConversionClient
    {
        return new DynamicCurrencyConversionClient($this, $this->context);
    }
}
