<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Traits\Serializable;

class InvoiceStatusChangedData
{
    use Serializable;

    public const INVOICE_STATUS_PENDING = 'pending';
    public const INVOICE_STATUS_PAID = 'paid';
    public const INVOICE_STATUS_CANCELED = 'canceled';
    public const INVOICE_STATUS_PARTIALLY_PAID = 'partially_paid';
    public const INVOICE_STATUS_REFUNDED = 'refunded';
    public const INVOICE_STATUS_EXPIRED = 'expired';
    public const INVOICE_STATUS_AUTHORIZED = 'authorized';
    public const INVOICE_STATUS_IN_PROTEST = 'in_protest';
    public const INVOICE_STATUS_CHARGEBACK = 'chargeback';

    public const PAYMENT_METHOD_BANK_SLIP = 'iugu_bank_slip';
    public const PAYMENT_METHOD_CREDIT_CARD = 'iugu_credit_card';
    public const PAYMENT_METHOD_PIX = 'iugu_pix';

    protected string $id;
    protected string $status;
    protected string $account_id;
    protected ?string $payment_method = null;
    protected ?string $paid_at = null;
    protected ?string $payer_cpf_cnpj = null;
    protected ?string $subscription_id = null;
    protected ?string $pix_end_to_end_id = null;
    protected ?string $paid_cents = null;
    protected ?string $commission_cents = null;
    protected ?string $fee_cents = null;

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

    public function getPayerCpfCnpj(): ?string
    {
        return $this->payer_cpf_cnpj;
    }

    public function setPayerCpfCnpj(?string $payer_cpf_cnpj): InvoiceStatusChangedData
    {
        $this->payer_cpf_cnpj = $payer_cpf_cnpj;
        return $this;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscription_id;
    }

    public function setSubscriptionId(?string $subscription_id): InvoiceStatusChangedData
    {
        $this->subscription_id = $subscription_id;
        return $this;
    }

    public function getPixEndToEndId(): ?string
    {
        return $this->pix_end_to_end_id;
    }

    public function setPixEndToEndId(?string $pix_end_to_end_id): InvoiceStatusChangedData
    {
        $this->pix_end_to_end_id = $pix_end_to_end_id;
        return $this;
    }

    public function getPaidCents(): ?string
    {
        return $this->paid_cents;
    }

    public function setPaidCents(?string $paid_cents): InvoiceStatusChangedData
    {
        $this->paid_cents = $paid_cents;
        return $this;
    }

    public function getCommissionCents(): ?string
    {
        return $this->commission_cents;
    }

    public function setCommissionCents(?string $commission_cents): InvoiceStatusChangedData
    {
        $this->commission_cents = $commission_cents;
        return $this;
    }

    public function getFeeCents(): ?string
    {
        return $this->fee_cents;
    }

    public function setFeeCents(?string $fee_cents): InvoiceStatusChangedData
    {
        $this->fee_cents = $fee_cents;
        return $this;
    }
}
