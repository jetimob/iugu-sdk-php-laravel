<?php

namespace Jetimob\Iugu\Api\Transfer;

use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\Transfer;

class TransferApi extends AbstractApi
{
    /**
     * @throws \Throwable
     * @throws \JsonException
     */
    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        return $this->signedPost(
            '/v1/transfer_requests',
            RequestTransferResponse::class,
            $transfer->toArray(),
        );
    }

    public function find(string $transferId): FindTransferResponse
    {
        return $this->mappedGet("transfer_requests/$transferId", FindTransferResponse::class);
    }
}
