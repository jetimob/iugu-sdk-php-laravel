<?php

namespace Jetimob\Iugu\Api\Transfer;

use Carbon\Carbon;
use Jetimob\Http\Response;
use Jetimob\Iugu\Entity\TransferType;

class RequestTransferResponse extends Response
{
    protected string $transfer_request_id;
    protected string $created_at;
    protected string $amount_cents;
    protected string $transfer_type;
    protected string $status;

    public function getTransferRequestId(): string
    {
        return $this->transfer_request_id;
    }

    public function getCreatedAt(): Carbon
    {
        return Carbon::parse($this->created_at);
    }

    public function getAmountCents(): string
    {
        return $this->amount_cents;
    }

    public function getTransferType(): ?TransferType
    {
        return TransferType::tryFrom($this->transfer_type);
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
