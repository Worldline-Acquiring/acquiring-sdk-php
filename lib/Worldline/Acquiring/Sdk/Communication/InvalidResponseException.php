<?php
namespace Worldline\Acquiring\Sdk\Communication;

use RuntimeException;

/**
 * Class InvalidResponseException
 *
 * @package Worldline\Acquiring\Sdk\Communication
 */
class InvalidResponseException extends RuntimeException
{
    /**
     * @var ConnectionResponse
     */
    private $response;

    /**
     * @param ConnectionResponse $response
     * @param string|null $message
     */
    public function __construct(ConnectionResponse $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an invalid response.';
        }
        parent::__construct($message);
        $this->response = $response;
    }

    /**
     * @return ConnectionResponse
     */
    public function getResponse()
    {
        return $this->response;
    }
}
