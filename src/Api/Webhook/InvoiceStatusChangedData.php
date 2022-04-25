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
