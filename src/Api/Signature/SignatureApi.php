<?php

namespace Jetimob\Iugu\Api\Signature;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Authorization\RSASignature;
use Jetimob\Iugu\Entity\PixType;
use Jetimob\Iugu\Entity\ReceiverPix;

class SignatureApi extends AbstractApi
{
    /**
     * @throws \Throwable
     * @throws \JsonException
     */
    public function validate(): ValidateSignatureResponse
    {
        $dummyData = (new ReceiverPix())
                ->setKey('teste')
                ->setType(PixType::EVP);
        $endpoint = '/v1/signature/validate';
        $signature = RSASignature::fromEntity(
            $dummyData,
            $endpoint
        );

        $options = [
            RequestOptions::JSON => $dummyData->toArray()
        ];

        return $this->mappedPost(
            $endpoint,
            ValidateSignatureResponse::class,
            $this->withSignature($options, $signature)
        );
    }
}
