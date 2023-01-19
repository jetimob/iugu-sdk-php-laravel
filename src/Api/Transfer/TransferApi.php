<?php

namespace Jetimob\Iugu\Api\Transfer;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Authorization\RSASignature;
use Jetimob\Iugu\Entity\Transfer;

class TransferApi extends AbstractApi
{
    /**
     * @throws \Throwable
     * @throws \JsonException
     */
    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        $endpoint = '/v1/transfer_requests';
        $signature = RSASignature::fromEntity($transfer, $endpoint);

        return $this->mappedPost(
            $endpoint,
            RequestTransferResponse::class,
            $this->withSignature(
                [
                    RequestOptions::JSON => $transfer,
                ],
                $signature
            )
        );
    }
}
