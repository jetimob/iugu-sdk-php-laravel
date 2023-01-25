<?php

namespace Jetimob\Iugu\Api;

use GuzzleHttp\RequestOptions;
use Jetimob\Http\Request;
use Jetimob\Iugu\Authorization\RSASignature;
use Jetimob\Iugu\Exceptions\IuguRequestException;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = IuguRequestException::class;

    protected function withSignature(array $request, RSASignature $signature): array
    {
        if (!array_key_exists(RequestOptions::HEADERS, $request)) {
            $request[RequestOptions::HEADERS] = [];
        }

        $request[RequestOptions::HEADERS]['Signature'] = 'signature=' . $signature->getSignature();
        $request[RequestOptions::HEADERS]['Request-Time'] = $signature->getRequestTime();

        return $request;
    }

    public function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}
