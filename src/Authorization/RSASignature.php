<?php

namespace Jetimob\Iugu\Authorization;

use Carbon\Carbon;
use Jetimob\Iugu\Entity\Entity;
use Jetimob\Iugu\Exceptions\SignRequestException;

class RSASignature
{
    protected readonly string $signature;
    protected readonly string $requestTime;

    public function __construct(string $signature, string $requestTime)
    {
        $this->signature = $signature;
        $this->requestTime = $requestTime;
    }

    /**
     * @throws \JsonException
     * @throws SignRequestException
     */
    public static function sign(array $data, string $endpoint, string $apiToken, string $method = 'POST'): self
    {
        $requestTime = Carbon::now()->toIso8601String();
        $retSign = '';
        $stringToSign = sprintf(
            "%s|%s\n%s|%s\n%s",
            $method,
            $endpoint,
            $apiToken,
            $requestTime,
            json_encode(array_merge($data, ['api_token' => $apiToken]), JSON_THROW_ON_ERROR)
        );

        if (
            !openssl_sign(
                $stringToSign,
                $retSign,
                openssl_pkey_get_private(config('iugu.private_key')),
                OPENSSL_ALGO_SHA256
            )
        ) {
            throw new SignRequestException();
        }

        $signature = base64_encode($retSign);

        return new self($signature, $requestTime);
    }

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function getRequestTime(): string
    {
        return $this->requestTime;
    }
}
