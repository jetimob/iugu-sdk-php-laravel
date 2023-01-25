<?php

namespace Jetimob\Iugu\Api\Account;

use Jetimob\Http\Response;

abstract class BaseAccountResponse extends Response
{
    protected string $account_id;
    protected string $name;
    protected string $live_api_token;
    protected string $test_api_token;
    protected string $user_token;

    public function getAccountId(): string
    {
        return $this->account_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLiveApiToken(): string
    {
        return $this->live_api_token;
    }

    public function getTestApiToken(): string
    {
        return $this->test_api_token;
    }

    public function getUserToken(): string
    {
        return $this->user_token;
    }
}
