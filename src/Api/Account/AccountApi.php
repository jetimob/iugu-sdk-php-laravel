<?php

namespace Jetimob\Iugu\Api\Account;

use Jetimob\Iugu\Api\AbstractApi;

class AccountApi extends AbstractApi
{
    public function info(string $id): InfoAccountResponse
    {
        return $this->mappedGet("/accounts/$id", InfoAccountResponse::class);
    }
}
