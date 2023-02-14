<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Traits\Serializable;
use Jetimob\Iugu\Entity\TransferStatus;

class TransferStatusChangedData
{
    use Serializable;

    /** @var string $id ID da Transferência para terceiros */
    protected string $id;

    /** @var string $account_id ID da Conta */
    protected string $account_id;

    /** @var string $status Estado da Transferência (pending, processing, rejected, refunded, done, error) */
    protected string $status;

    public function getId(): string
    {
        return $this->id;
    }

    public function getAccountId(): string
    {
        return $this->account_id;
    }

    public function getStatus(): ?TransferStatus
    {
        return TransferStatus::tryFrom($this->status);
    }
}
