<?php

namespace Jetimob\Iugu\Entity;

class AccountConfiguration extends Entity
{
    /** @var Split[]|array $splits Lista de splits que será utilizado nessa conta. */
    protected array $splits;

    /** @var bool $auto_withdraw Saque automático? */
    protected bool $auto_withdraw;

    /** @var bool $per_day_interest Juros de mora? */
    protected bool $per_day_interest;

    /** @var bool $fines Multas? */
    protected bool $fines;

    /** @var int $late_payment_fine Valor da multa em % (Ex:2) */
    protected int $late_payment_fine;

    /**
     * Antecipação Automática. Só pode ser atribuído caso a conta tenha a funcionalidade de Novo Adiantamento habilitado
     * (entre em contato com o Suporte para habilitar). Caso o parâmetro não seja enviado, considera-se a mesma
     * configuração de adiantamento automático da conta mestre.
     *
     * @var bool $auto_advance
     */
    protected bool $auto_advance;

    /**
     * Opções de Antecipação Automática. Obrigatório caso auto_advance seja true. Recebe os valores
     * 'daily' (Antecipação diária), 'weekly' (Antecipação semanal, que ocorre no dia da semana determinado
     * pelo usuário), 'monthly' (Antecipação mensal, que ocorre no dia do mês determinado pelo usuário)
     * e 'days_after_payment' (Antecipação que ocorre em um número de dias após o pagamento especificado pelo usuário)
     *
     * @var bool $auto_advance_option
     */
    protected bool $auto_advance_option;

    /** @var ConfigurationBankSlip $bank_slip Configurações de boleto bancário */
    protected ConfigurationBankSlip $bank_slip;

    /** @var ConfigurationCreditCard $credit_card Configurações de cartão de crédito */
    protected ConfigurationCreditCard $credit_card;

    /** @var bool $payment_email_notification Ativa ou desativa a notificação de pagamento */
    protected bool $payment_email_notification;

    /**
     * Email que deve receber as notificações de pagamento **(Obrigatório caso payment_email_notification seja true)**
     *
     * @var string $payment_email_notification_receiver
     */
    protected string $payment_email_notification_receiver;

    /** @var bool $early_payment_discount Ativa ou desativa o desconto por pagamento antecipado */
    protected bool $early_payment_discount;

    /** @var EarlyPaymentDiscount[]|array $early_payment_discounts Configuração do desconto a ser aplicado */
    protected array $early_payment_discounts;

    /** @var bool $disabled_withdraw Desabilita saque da conta */
    protected bool $disabled_withdraw;

    /** @var string $customer_minimum_balance_cents Configuração de valor para reserva de saque*/
     protected string $customer_minimum_balance_cents;

     public function earlyPaymentDiscountsItemType(): string
     {
         return EarlyPaymentDiscount::class;
     }

    public function getSplits(): array
    {
        return $this->splits;
    }

    public function setSplits(array $splits): AccountConfiguration
    {
        $this->splits = $splits;
        return $this;
    }

    public function isAutoWithdraw(): bool
    {
        return $this->auto_withdraw;
    }

    public function setAutoWithdraw(bool $auto_withdraw): AccountConfiguration
    {
        $this->auto_withdraw = $auto_withdraw;
        return $this;
    }

    public function isPerDayInterest(): bool
    {
        return $this->per_day_interest;
    }

    public function setPerDayInterest(bool $per_day_interest): AccountConfiguration
    {
        $this->per_day_interest = $per_day_interest;
        return $this;
    }

    public function isFines(): bool
    {
        return $this->fines;
    }

    public function setFines(bool $fines): AccountConfiguration
    {
        $this->fines = $fines;
        return $this;
    }

    public function getLatePaymentFine(): int
    {
        return $this->late_payment_fine;
    }

    public function setLatePaymentFine(int $late_payment_fine): AccountConfiguration
    {
        $this->late_payment_fine = $late_payment_fine;
        return $this;
    }

    public function isAutoAdvance(): bool
    {
        return $this->auto_advance;
    }

    public function setAutoAdvance(bool $auto_advance): AccountConfiguration
    {
        $this->auto_advance = $auto_advance;
        return $this;
    }

    public function isAutoAdvanceOption(): bool
    {
        return $this->auto_advance_option;
    }

    public function setAutoAdvanceOption(bool $auto_advance_option): AccountConfiguration
    {
        $this->auto_advance_option = $auto_advance_option;
        return $this;
    }

    public function getBankSlip(): ConfigurationBankSlip
    {
        return $this->bank_slip;
    }

    public function setBankSlip(ConfigurationBankSlip $bank_slip): AccountConfiguration
    {
        $this->bank_slip = $bank_slip;
        return $this;
    }

    public function getCreditCard(): ConfigurationCreditCard
    {
        return $this->credit_card;
    }

    public function setCreditCard(ConfigurationCreditCard $credit_card): AccountConfiguration
    {
        $this->credit_card = $credit_card;
        return $this;
    }

    public function isPaymentEmailNotification(): bool
    {
        return $this->payment_email_notification;
    }

    public function setPaymentEmailNotification(bool $payment_email_notification): AccountConfiguration
    {
        $this->payment_email_notification = $payment_email_notification;
        return $this;
    }

    public function getPaymentEmailNotificationReceiver(): string
    {
        return $this->payment_email_notification_receiver;
    }

    public function setPaymentEmailNotificationReceiver(
        string $payment_email_notification_receiver
    ): AccountConfiguration {
        $this->payment_email_notification_receiver = $payment_email_notification_receiver;
        return $this;
    }

    public function isEarlyPaymentDiscount(): bool
    {
        return $this->early_payment_discount;
    }

    public function setEarlyPaymentDiscount(bool $early_payment_discount): AccountConfiguration
    {
        $this->early_payment_discount = $early_payment_discount;
        return $this;
    }

    public function getEarlyPaymentDiscounts(): array
    {
        return $this->early_payment_discounts;
    }

    public function setEarlyPaymentDiscounts(array $early_payment_discounts): AccountConfiguration
    {
        $this->early_payment_discounts = $early_payment_discounts;
        return $this;
    }

    public function isDisabledWithdraw(): bool
    {
        return $this->disabled_withdraw;
    }

    public function setDisabledWithdraw(bool $disabled_withdraw): AccountConfiguration
    {
        $this->disabled_withdraw = $disabled_withdraw;
        return $this;
    }

    public function getCustomerMinimumBalanceCents(): string
    {
        return $this->customer_minimum_balance_cents;
    }

    public function setCustomerMinimumBalanceCents(string $customer_minimum_balance_cents): AccountConfiguration
    {
        $this->customer_minimum_balance_cents = $customer_minimum_balance_cents;
        return $this;
    }
}
