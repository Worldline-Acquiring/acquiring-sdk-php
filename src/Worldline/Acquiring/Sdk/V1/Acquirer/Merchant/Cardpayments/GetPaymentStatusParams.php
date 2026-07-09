<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardpayments;

use Worldline\Acquiring\Sdk\Communication\RequestObject;

/**
 * Query parameters for Retrieve payment
 *
 * @package Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardpayments
 * @link    https://docs.acquiring.worldline-solutions.com/api-reference#tag/Card-Payments/operation/getPaymentStatus Retrieve payment
 */
class GetPaymentStatusParams extends RequestObject
{
    /**
     * @var bool|null
     */
    public ?bool $returnOperations;
}
