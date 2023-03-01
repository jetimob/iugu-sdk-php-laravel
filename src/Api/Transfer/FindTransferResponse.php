<?php

namespace Jetimob\Iugu\Api\Transfer;

use Jetimob\Http\Response;
use Jetimob\Iugu\Entity\ReceiverAccount;
use Jetimob\Iugu\Entity\SenderAccount;

class FindTransferResponse extends Response
{
    protected string $id;
    protected string $status;
    protected string $transfer_type;
    protected ?string $reason;
    protected ?string $description;
    protected ?string $external_reference;
    protected ?string $end_to_end_id;
    protected ?string $executed_at;
    protected ?string $rejected_at;
    protected ?string $rejected_reason;
    protected ?string $receipt_url;
    protected string $created_at;
    protected string $updated_at;
    protected int $amount_cents;
    protected string $amount;
    protected SenderAccount $sender_account;
    protected ReceiverAccount $receiver_account;

    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getTransferType(): string
    {
        return $this->transfer_type;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getExternalReference(): ?string
    {
        return $this->external_reference;
    }

    public function getEndToEndId(): ?string
    {
        return $this->end_to_end_id;
    }

    public function getExecutedAt(): ?string
    {
        return $this->executed_at;
    }

    public function getRejectedAt(): ?string
    {
        return $this->rejected_at;
    }

    public function getRejectedReason(): ?string
    {
        return $this->rejected_reason;
    }

    public function getReceiptUrl(): ?string
    {
        return $this->receipt_url;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function getAmountCents(): int
    {
        return $this->amount_cents;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getSenderAccount(): SenderAccount
    {
        return $this->sender_account;
    }

    public function getReceiverAccount(): ReceiverAccount
    {
        return $this->receiver_account;
    }
}
