<?php
namespace Worldline\Acquiring\Sdk\TestUtil;

use Worldline\Acquiring\Sdk\BodyHandler;

class AppendingBodyHandler extends BodyHandler
{
    /** @var string */
    private $body;

    protected function initialize($headers)
    {
        $this->body = '';
    }

    protected function doHandleBodyPart($bodyPart)
    {
        $this->body .= $bodyPart;
    }

    public function getBody()
    {
        return $this->body;
    }
}
