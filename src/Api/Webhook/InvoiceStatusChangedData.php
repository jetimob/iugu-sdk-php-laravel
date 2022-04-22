<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Traits\Serializable;

class InvoiceStatusChangedData
{
    use Serializable;

    protected string $id;
    protected string $account_id;
    protected string $status;
    protected string $payment_method;
    protected string $paid_at;
    protected string $payer_cpf_cnpj;
    protected string $subscription_id;

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

    public function getPaymentMethod(): string
    {
        return $this->payment_method;
    }

    public function getPaidAt(): string
    {
        return $this->paid_at;
    }

    public function getPayerCpfCnpj(): string
    {
        return $this->payer_cpf_cnpj;
    }

    public function getSubscriptionId(): string
    {
        return $this->subscription_id;
    }
}
