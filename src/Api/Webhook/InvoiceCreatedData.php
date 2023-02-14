<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Traits\Serializable;

class InvoiceCreatedData
{
    use Serializable;

    protected string $id;
    protected string $account_id;
    protected string $status;
    protected ?string $subscription_id;
    protected ?string $source;
    protected ?string $order_id;
    protected ?string $external_reference;

    public function getId(): string
    {
        return $this->id;
    }

    public function getAccountId(): string
    {
        return $this->account_id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscription_id;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function getOrderId(): ?string
    {
        return $this->order_id;
    }

    public function getExternalReference(): ?string
    {
        return $this->external_reference;
    }
}
