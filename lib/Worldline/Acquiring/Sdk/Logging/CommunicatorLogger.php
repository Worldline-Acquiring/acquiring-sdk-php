<?php
namespace Worldline\Acquiring\Sdk\Logging;

use Exception;

/**
 * Class CommunicatorLogger
 *
 * @package Worldline\Acquiring\Sdk\Logging
 */
interface CommunicatorLogger
{
    /**
     * @param string $message
     */
    public function log($message);

    /**
     * @param string $message
     * @param Exception $exception
     */
    public function logException($message, Exception $exception);
}
