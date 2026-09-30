<?php
/*
 * This file was automatically generated.
 */
namespace Worldline\Acquiring\Sdk\V1\Disputedocuments;

use Worldline\Acquiring\Sdk\Communication\MultipartDataObject;
use Worldline\Acquiring\Sdk\Communication\MultipartFormDataObject;
use Worldline\Acquiring\Sdk\Domain\UploadableFile;

/**
 * Multipart/form-data parameters for Upload Dispute Document
 *
 * @package Worldline\Acquiring\Sdk\V1\Disputedocuments
 * @link    https://docs.acquiring.worldline-solutions.com/api-reference#tag/Dispute-Documents/operation/uploadDisputeDocument Upload Dispute Document
 */
class UploadDisputeDocumentRequest extends MultipartDataObject
{
    /**
     * @var UploadableFile|null
     */
    public ?UploadableFile $file;

    public function toMultipartFormDataObject(): MultipartFormDataObject
    {
        $result = new MultipartFormDataObject();
        if (!is_null($this->file)) {
            $result->addFile("file", $this->file);
        }
        return $result;
    }
}
