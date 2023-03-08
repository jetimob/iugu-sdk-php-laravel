<?php

namespace Jetimob\Iugu\Api\Account;

use Jetimob\Http\Response;

class ConfigurePixResponse extends Response
{
    protected bool $success;

    public function isSuccess(): bool
    {
        return $this->success;
    }
}
