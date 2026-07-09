<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardrefunds;

use Worldline\Acquiring\Sdk\Communication\RequestObject;

/**
 * Query parameters for Retrieve card refund
 *
 * @package Worldline\Acquiring\Sdk\V1\Acquirer\Merchant\Cardrefunds
 * @link    https://docs.acquiring.worldline-solutions.com/api-reference#tag/Card-Refunds/operation/getRefund Retrieve card refund
 */
class GetRefundParams extends RequestObject
{
    /**
     * @var bool|null
     */
    public ?bool $returnOperations;
}
