<?php

namespace Jetimob\Iugu\Api\Signature;

use Jetimob\Http\Response;

class ValidateSignatureResponse extends Response
{
    protected string $message;
    protected string $request_body;
    protected string $status;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getRequestBody(): string
    {
        return $this->request_body;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
