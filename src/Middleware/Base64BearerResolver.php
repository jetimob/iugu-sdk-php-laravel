<?php

namespace Jetimob\Iugu\Middleware;

use Jetimob\Http\Authorization\Bearer\BearerTokenResolverContract;

class Base64BearerResolver implements BearerTokenResolverContract
{
    public function resolveToken(array $options): string
    {
        return base64_encode(config('iugu.http.bearer_token_value'));
    }
}