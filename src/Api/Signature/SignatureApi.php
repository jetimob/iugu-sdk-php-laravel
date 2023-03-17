<?php

namespace Jetimob\Iugu\Api\Signature;

use Jetimob\Iugu\Api\AbstractApi;

class SignatureApi extends AbstractApi
{
    /**
     * @throws \Throwable
     * @throws \JsonException
     */
    public function validate(): ValidateSignatureResponse
    {
        return $this->signedPost(
            '/v1/signature/validate',
            ValidateSignatureResponse::class,
            ['message' => 'test'],
        );
    }
}
