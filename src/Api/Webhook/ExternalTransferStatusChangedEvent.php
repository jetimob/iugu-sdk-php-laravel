<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Iugu\Entity\TransferStatus;
use Jetimob\Iugu\Entity\TransferType;
use Jetimob\Iugu\Entity\TransferWebhookReceiverAccount;
use Jetimob\Iugu\Entity\TransferWebhookSenderAccount;

class ExternalTransferStatusChangedEvent extends WebhookEvent
{
    protected string $event;
    protected string $transfer_request_id;
    protected string $transfer_status;
    protected ?string $description = null;
    protected string $amount_cents;
    protected string $transfer_type;
    protected TransferWebhookSenderAccount $sender;
    protected TransferWebhookReceiverAccount $receiver;
    protected string $statement;

    /**
     * @return IuguWebhookEvent
     */
    public function getEvent(): IuguWebhookEvent
    {
        return IuguWebhookEvent::tryFrom($this->event);
    }

    /**
     * @return string
     */
    public function getTransferRequestId(): string
    {
        return $this->transfer_request_id;
    }

    /**
     * @return TransferStatus
     */
    public function getTransferStatus(): TransferStatus
    {
        return TransferStatus::tryFrom($this->transfer_status);
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getAmountCents(): string
    {
        return $this->amount_cents;
    }

    /**
     * @return TransferType
     */
    public function getTransferType(): TransferType
    {
        return TransferType::tryFrom($this->transfer_type);
    }

    /**
     * @return TransferWebhookSenderAccount
     */
    public function getSender(): TransferWebhookSenderAccount
    {
        return $this->sender;
    }

    /**
     * @return TransferWebhookReceiverAccount
     */
    public function getReceiver(): TransferWebhookReceiverAccount
    {
        return $this->receiver;
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return $this->statement;
    }
}
