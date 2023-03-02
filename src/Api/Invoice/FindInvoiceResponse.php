<?php

namespace Jetimob\Iugu\Api\Invoice;

class FindInvoiceResponse extends InvoiceResponse
{
    protected ?string $total_paid_cents;
    protected ?string $taxes_paid_cents;
    protected ?string $paid_cents;
    protected ?string $cc_emails;
    protected ?string $financial_return_date;
    protected ?string $payable_with;
    protected ?string $ignore_due_email;
    protected ?string $ignore_canceled_email;
    protected ?string $advance_fee_cents;
    protected bool $early_payment_discount;
    protected ?string $credit_card_brand;
    protected ?string $credit_card_bin;
    protected ?string $credit_card_last_4;
    protected ?string $credit_card_captured_at;
    protected ?string $credit_card_tid;
    protected ?string $external_reference;
    protected ?string $max_installments_value;
    protected string $payer_name;
    protected ?string $payer_email;
    protected string $payer_cpf_cnpj;
    protected ?string $payer_phone;
    protected ?string $payer_phone_prefix;
    protected string $payer_address_zip_code;
    protected string $payer_address_street;
    protected ?string $payer_address_district;
    protected string $payer_address_city;
    protected string $payer_address_state;
    protected ?string $payer_address_number;
    protected ?string $payer_address_complement;
    protected ?string $payer_address_country;
    protected ?string $late_payment_fine;
    protected ?string $late_payment_fine_cents;
    protected ?string $split_id;
    protected ?string $external_payment_id;
    protected ?string $external_payment_description;
    protected string $account_id;
    protected string $bank_account_branch;
    protected string $bank_account_number;
    protected string $account_name;
    protected ?string $customer_ref;
    protected ?string $customer_name;
    protected string $total_paid;
    protected string $total_overpaid;
    protected string $total_refunded;
    protected string $fines_on_occurrence_day;
    protected string $total_on_occurrence_day;
    protected string $fines_on_occurrence_day_cents;
    protected string $total_on_occurrence_day_cents;
    protected string $refunded_cents;
    protected string $remaining_captured_cents;
    protected ?string $advance_fee;
    protected ?string $estimated_advance_fee;
    protected ?string $paid;
    protected ?string $original_payment_id;
    protected ?string $double_payment_id;
    protected bool $per_day_interest;
    protected ?string $per_day_interest_value;
    protected ?string $duplicated_invoice_id;
    protected string $created_at_iso;
    protected ?string $authorized_at;
    protected ?string $authorized_at_iso;
    protected ?string $expired_at;
    protected ?string $expired_at_iso;
    protected ?string $refunded_at;
    protected ?string $refunded_at_iso;
    protected ?string $canceled_at;
    protected ?string $canceled_at_iso;
    protected ?string $protested_at;
    protected ?string $protested_at_iso;
    protected ?string $chargeback_at;
    protected ?string $chargeback_at_iso;
    protected ?string $occurrence_date;
    protected ?string $transaction_number;
    protected ?string $payment_method;
    protected ?string $financial_return_dates;

    public function getTotalPaidCents(): ?string
    {
        return $this->total_paid_cents;
    }

    public function getTaxesPaidCents(): ?string
    {
        return $this->taxes_paid_cents;
    }

    public function getPaidCents(): ?string
    {
        return $this->paid_cents;
    }

    public function getCcEmails(): ?string
    {
        return $this->cc_emails;
    }

    public function getFinancialReturnDate(): ?string
    {
        return $this->financial_return_date;
    }

    public function getPayableWith(): ?string
    {
        return $this->payable_with;
    }

    public function getIgnoreDueEmail(): ?string
    {
        return $this->ignore_due_email;
    }

    public function getIgnoreCanceledEmail(): ?string
    {
        return $this->ignore_canceled_email;
    }

    public function getAdvanceFeeCents(): ?string
    {
        return $this->advance_fee_cents;
    }

    public function isEarlyPaymentDiscount(): bool
    {
        return $this->early_payment_discount;
    }

    public function getCreditCardBrand(): ?string
    {
        return $this->credit_card_brand;
    }

    public function getCreditCardBin(): ?string
    {
        return $this->credit_card_bin;
    }

    public function getCreditCardLast4(): ?string
    {
        return $this->credit_card_last_4;
    }

    public function getCreditCardCapturedAt(): ?string
    {
        return $this->credit_card_captured_at;
    }

    public function getCreditCardTid(): ?string
    {
        return $this->credit_card_tid;
    }

    public function getExternalReference(): ?string
    {
        return $this->external_reference;
    }

    public function getMaxInstallmentsValue(): ?string
    {
        return $this->max_installments_value;
    }

    public function getPayerName(): string
    {
        return $this->payer_name;
    }

    public function getPayerEmail(): ?string
    {
        return $this->payer_email;
    }

    public function getPayerCpfCnpj(): string
    {
        return $this->payer_cpf_cnpj;
    }

    public function getPayerPhone(): ?string
    {
        return $this->payer_phone;
    }

    public function getPayerPhonePrefix(): ?string
    {
        return $this->payer_phone_prefix;
    }

    public function getPayerAddressZipCode(): string
    {
        return $this->payer_address_zip_code;
    }

    public function getPayerAddressStreet(): string
    {
        return $this->payer_address_street;
    }

    public function getPayerAddressDistrict(): ?string
    {
        return $this->payer_address_district;
    }

    public function getPayerAddressCity(): string
    {
        return $this->payer_address_city;
    }

    public function getPayerAddressState(): string
    {
        return $this->payer_address_state;
    }

    public function getPayerAddressNumber(): ?string
    {
        return $this->payer_address_number;
    }

    public function getPayerAddressComplement(): ?string
    {
        return $this->payer_address_complement;
    }

    public function getPayerAddressCountry(): ?string
    {
        return $this->payer_address_country;
    }

    public function getLatePaymentFine(): ?string
    {
        return $this->late_payment_fine;
    }

    public function getLatePaymentFineCents(): ?string
    {
        return $this->late_payment_fine_cents;
    }

    public function getSplitId(): ?string
    {
        return $this->split_id;
    }

    public function getExternalPaymentId(): ?string
    {
        return $this->external_payment_id;
    }

    public function getExternalPaymentDescription(): ?string
    {
        return $this->external_payment_description;
    }

    public function getAccountId(): string
    {
        return $this->account_id;
    }

    public function getBankAccountBranch(): string
    {
        return $this->bank_account_branch;
    }

    public function getBankAccountNumber(): string
    {
        return $this->bank_account_number;
    }

    public function getAccountName(): string
    {
        return $this->account_name;
    }

    public function getCustomerRef(): ?string
    {
        return $this->customer_ref;
    }

    public function getCustomerName(): ?string
    {
        return $this->customer_name;
    }

    public function getTotalPaid(): string
    {
        return $this->total_paid;
    }

    public function getTotalOverpaid(): string
    {
        return $this->total_overpaid;
    }

    public function getTotalRefunded(): string
    {
        return $this->total_refunded;
    }

    public function getFinesOnOccurrenceDay(): string
    {
        return $this->fines_on_occurrence_day;
    }

    public function getTotalOnOccurrenceDay(): string
    {
        return $this->total_on_occurrence_day;
    }

    public function getFinesOnOccurrenceDayCents(): string
    {
        return $this->fines_on_occurrence_day_cents;
    }

    public function getTotalOnOccurrenceDayCents(): string
    {
        return $this->total_on_occurrence_day_cents;
    }

    public function getRefundedCents(): string
    {
        return $this->refunded_cents;
    }

    public function getRemainingCapturedCents(): string
    {
        return $this->remaining_captured_cents;
    }

    public function getAdvanceFee(): ?string
    {
        return $this->advance_fee;
    }

    public function getEstimatedAdvanceFee(): ?string
    {
        return $this->estimated_advance_fee;
    }

    public function getPaid(): ?string
    {
        return $this->paid;
    }

    public function getOriginalPaymentId(): ?string
    {
        return $this->original_payment_id;
    }

    public function getDoublePaymentId(): ?string
    {
        return $this->double_payment_id;
    }

    public function isPerDayInterest(): bool
    {
        return $this->per_day_interest;
    }

    public function getPerDayInterestValue(): ?string
    {
        return $this->per_day_interest_value;
    }

    public function getDuplicatedInvoiceId(): ?string
    {
        return $this->duplicated_invoice_id;
    }

    public function getCreatedAtIso(): string
    {
        return $this->created_at_iso;
    }

    public function getAuthorizedAt(): ?string
    {
        return $this->authorized_at;
    }

    public function getAuthorizedAtIso(): ?string
    {
        return $this->authorized_at_iso;
    }

    public function getExpiredAt(): ?string
    {
        return $this->expired_at;
    }

    public function getExpiredAtIso(): ?string
    {
        return $this->expired_at_iso;
    }

    public function getRefundedAt(): ?string
    {
        return $this->refunded_at;
    }

    public function getRefundedAtIso(): ?string
    {
        return $this->refunded_at_iso;
    }

    public function getCanceledAt(): ?string
    {
        return $this->canceled_at;
    }

    public function getCanceledAtIso(): ?string
    {
        return $this->canceled_at_iso;
    }

    public function getProtestedAt(): ?string
    {
        return $this->protested_at;
    }

    public function getProtestedAtIso(): ?string
    {
        return $this->protested_at_iso;
    }

    public function getChargebackAt(): ?string
    {
        return $this->chargeback_at;
    }

    public function getChargebackAtIso(): ?string
    {
        return $this->chargeback_at_iso;
    }

    public function getOccurrenceDate(): ?string
    {
        return $this->occurrence_date;
    }

    public function getTransactionNumber(): ?string
    {
        return $this->transaction_number;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->payment_method;
    }

    public function getFinancialReturnDates(): ?string
    {
        return $this->financial_return_dates;
    }
}
