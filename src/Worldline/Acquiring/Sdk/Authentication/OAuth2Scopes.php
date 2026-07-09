<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\Authentication;

/**
 * Class OAuth2Scopes
 *
 * @package Worldline\Acquiring\Sdk\Authentication
 */
class OAuth2Scopes
{
    /**
     * @var array|null
     */
    private static ?array $scopesByOperation = null;

    /**
     * @var array|null
     */
    private static ?array $allScopes = null;

    private function __construct()
    {
    }

    private static function initializeScopesByOperationIfNeeded(): void
    {
        if (is_null(OAuth2Scopes::$scopesByOperation)) {
            OAuth2Scopes::$scopesByOperation = [
                "v1" => [
                    "processPayment" => ["processing_payment"],
                    "getPaymentStatus" => ["processing_payment"],
                    "simpleCaptureOfPayment" => ["processing_payment"],
                    "reverseAuthorization" => ["processing_payment"],
                    "incrementPayment" => ["processing_payment"],
                    "createRefund" => ["processing_refund"],
                    "processStandaloneRefund" => ["processing_refund"],
                    "getRefund" => ["processing_refund"],
                    "captureRefund" => ["processing_refund"],
                    "reverseRefundAuthorization" => ["processing_refund"],
                    "processAccountVerification" => ["processing_accountverification"],
                    "processBalanceInquiry" => ["processing_balanceinquiry"],
                    "technicalReversal" => ["processing_operation_reverse"],
                    "requestDccRate" => ["processing_dcc_rate"],
                    "ping" => ["services_ping"],
                ],
            ];
            OAuth2Scopes::$allScopes = [];
            foreach (OAuth2Scopes::$scopesByOperation as $operations) {
                foreach ($operations as $scopes) {
                    OAuth2Scopes::$allScopes = array_merge(OAuth2Scopes::$allScopes, array_values($scopes));
                }
            }
            OAuth2Scopes::$allScopes = array_unique(OAuth2Scopes::$allScopes);
        }
    }

    /**
     * @return array all available scopes.
     */
    public static function all(): array
    {
        OAuth2Scopes::initializeScopesByOperationIfNeeded();
        return OAuth2Scopes::$allScopes;
    }

    /**
     * @param string $apiVersion
     *
     * @return array all scopes needed for all operations of the given API version.
     */
    public static function forApiVersion(string $apiVersion): array
    {
        OAuth2Scopes::initializeScopesByOperationIfNeeded();
        $operations = OAuth2Scopes::$scopesByOperation[$apiVersion] ?? [];
        $result = [];
        foreach ($operations as $scopes) {
            $result = array_merge($result, $scopes);
        }
        return array_unique($result);
    }

    /**
     * @param string $apiVersion
     * @param string $operationId
     *
     * @return array all scopes needed for the given operation of the given API version.
     */
    public static function forOperation(string $apiVersion, string $operationId): array
    {
        OAuth2Scopes::initializeScopesByOperationIfNeeded();
        $operations = OAuth2Scopes::$scopesByOperation[$apiVersion] ?? [];
        return $operations[$operationId] ?? [];
    }

    /**
     * @param string $apiVersion
     * @param string ...$operationIds
     *
     * @return array all scopes needed for the given operations of the given API version.
     */
    public static function forOperations(string $apiVersion, string ...$operationIds): array
    {
        OAuth2Scopes::initializeScopesByOperationIfNeeded();
        $operations = OAuth2Scopes::$scopesByOperation[$apiVersion] ?? [];
        if (count($operationIds) === 1) {
            return $operations[$operationIds[0]] ?? [];
        }
        $result = [];
        foreach ($operationIds as $operationId) {
            $scopes = $operations[$operationId] ?? [];
            $result = array_merge($result, $scopes);
        }
        return array_unique($result);
    }

    /**
     * @param callable $filter The filter to apply.
     *                         The first argument is the API version, the second is the operation id,
     *                         the return value should be true to include the scopes for the API version and operation id,
     *                         or false otherwise.
     * @return array all scopes needed for the operations that pass the given filter.
     */
    public static function forFilteredOperations(callable $filter): array
    {
        OAuth2Scopes::initializeScopesByOperationIfNeeded();
        $result = [];
        foreach (OAuth2Scopes::$scopesByOperation as $apiVersion => $operations) {
            foreach ($operations as $operationId => $scopes) {
                if (call_user_func($filter, $apiVersion, $operationId)) {
                    $result = array_merge($result, $scopes);
                }
            }
        }
        return array_unique($result);
    }
}
