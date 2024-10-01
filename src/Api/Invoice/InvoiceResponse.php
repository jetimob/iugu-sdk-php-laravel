<?php

namespace Jetimob\Iugu\Api\Invoice;

use Jetimob\Http\Response;
use Jetimob\Iugu\Entity\BankSlip;
use Jetimob\Iugu\Entity\CreditCardTransaction;
use Jetimob\Iugu\Entity\InvoiceResponseItem;
use Jetimob\Iugu\Entity\Pix;
use Jetimob\Iugu\Entity\Variable;

abstract class InvoiceResponse extends Response
{
    protected string $id;
    protected string $due_date;
    protected string $currency;
    protected ?string $discount_cents;
    protected string $email;
    protected int $items_total_cents;
    protected ?string $notification_url;
    protected ?string $return_url;
    protected string $status;
    protected ?string $tax_cents;
    protected string $updated_at;
    protected string $total_cents;
    protected ?string $paid_at;
    protected Pix $pix;
    protected ?string $commission_cents;
    protected ?string $secure_id;
    protected ?string $secure_url;
    protected ?string $customer_id;
    protected ?string $user_id;
    protected string $total;
    protected string $taxes_paid;
    protected string $commission;
    protected ?string $interest;
    protected ?string $discount;
    protected string $created_at;
    protected ?string $refundable;
    protected ?string $installments;
    protected BankSlip $bank_slip;

    /** @var array|InvoiceResponseItem[] $items */
    protected array $items;

    /** @var array|string[] $custom_variables */
    protected array $custom_variables;

    /** @var array|string[] $logs*/
    protected array $logs;

    /** @var array|Variable[] $variables  */
    protected array $variables;

    protected CreditCardTransaction $credit_card_transaction;

    public function itemsItemType(): string
    {
        return InvoiceResponseItem::class;
    }

    public function variablesItemType(): string
    {
        return Variable::class;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDueDate(): string
    {
        return $this->due_date;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getDiscountCents(): ?string
    {
        return $this->discount_cents;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getItemsTotalCents(): int
    {
        return $this->items_total_cents;
    }

    public function getNotificationUrl(): ?string
    {
        return $this->notification_url;
    }

    public function getReturnUrl(): ?string
    {
        return $this->return_url;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getTaxCents(): ?string
    {
        return $this->tax_cents;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function getTotalCents(): string
    {
        return $this->total_cents;
    }

    public function getPaidAt(): ?string
    {
        return $this->paid_at;
    }

    public function getPix(): Pix
    {
        return $this->pix;
    }

    public function getCommissionCents(): ?string
    {
        return $this->commission_cents;
    }

    public function getSecureId(): ?string
    {
        return $this->secure_id;
    }

    public function getSecureUrl(): ?string
    {
        return $this->secure_url;
    }

    public function getCustomerId(): ?string
    {
        return $this->customer_id;
    }

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function getTotal(): string
    {
        return $this->total;
    }

    public function getTaxesPaid(): string
    {
        return $this->taxes_paid;
    }

    public function getCommission(): string
    {
        return $this->commission;
    }

    public function getInterest(): ?string
    {
        return $this->interest;
    }

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getRefundable(): ?string
    {
        return $this->refundable;
    }

    public function getInstallments(): ?string
    {
        return $this->installments;
    }

    public function getBankSlip(): BankSlip
    {
        return $this->bank_slip;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getCustomVariables(): array
    {
        return $this->custom_variables;
    }

    public function getLogs(): array
    {
        return $this->logs;
    }

    public function getVariables(): array
    {
        return $this->variables;
    }

    public function getCreditCardTransaction(): CreditCardTransaction
    {
        return $this->credit_card_transaction;
    }
}
