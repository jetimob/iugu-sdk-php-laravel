<?php

namespace Jetimob\Iugu\Api;

use GuzzleHttp\RequestOptions;
use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Request;
use Jetimob\Iugu\Authorization\RSASignature;
use Jetimob\Iugu\Exceptions\IuguRequestException;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = IuguRequestException::class;

    protected string $bearerToken = '';

    public function __construct(HttpProviderContract $httpProvider)
    {
        $this->setBearerToken(config('iugu.http.bearer_token_value'));
        parent::__construct($httpProvider);
    }

    public function usingToken(string $bearerToken): self
    {
        $this->setBearerToken($bearerToken);
        return $this;
    }

    protected function withSignature(array $request, RSASignature $signature): array
    {
        if (!array_key_exists(RequestOptions::HEADERS, $request)) {
            $request[RequestOptions::HEADERS] = [];
        }

        $request[RequestOptions::HEADERS]['Signature'] = 'signature=' . $signature->getSignature();
        $request[RequestOptions::HEADERS]['Request-Time'] = $signature->getRequestTime();

        return $request;
    }

    private function setBearerToken(string $bearerToken): void
    {
        $this->bearerToken = base64_encode($bearerToken);
    }

    public function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        if (!isset($headers['Authorization'])) {
            $headers['Authorization'] =  "Bearer $this->bearerToken";
        }

        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}
