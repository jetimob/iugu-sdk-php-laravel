<?php

namespace Jetimob\Iugu\Api\Transfer;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\Transfer;

class TransferApi extends AbstractApi
{
    public function requestTransfer(Transfer $transfer): RequestTransferResponse
    {
        return $this->mappedPost('transfer_requests', RequestTransferResponse::class, [
            RequestOptions::JSON => $transfer
        ]);
    }
}