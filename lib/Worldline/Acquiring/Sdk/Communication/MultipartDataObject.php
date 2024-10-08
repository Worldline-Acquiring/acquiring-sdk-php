<?php
namespace Worldline\Acquiring\Sdk\Communication;

use Exception;

/**
 * Class MultipartDataObject
 *
 * @package Worldline\Acquiring\Sdk\Communication
 */
abstract class MultipartDataObject
{
    /**
     * @return MultipartFormDataObject
     */
    public abstract function toMultipartFormDataObject();

    public function __set($name, $value)
    {
        throw new Exception('Cannot add new property ' . $name . ' to instances of class ' . get_class($this));
    }
}
