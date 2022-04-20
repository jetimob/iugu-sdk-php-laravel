<?php

namespace Jetimob\Iugu\Api;

use Jetimob\Http\Request;
use Jetimob\Iugu\Exceptions\IuguRequestException;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = IuguRequestException::class;

    public function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}
