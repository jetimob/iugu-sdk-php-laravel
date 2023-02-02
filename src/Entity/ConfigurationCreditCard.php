<?php

namespace Jetimob\Iugu\Entity;

class ConfigurationCreditCard extends Entity
{
    protected bool $active;

    /**
     * Descrição que apareça na Fatura do Cartão do Cliente (Obs: Esse campo pode sofrer limitação
     * **de 12 ou 22 caracteres** dependendo da adquirente utilizada pela iugu no momento da transação)
     * @var string $soft_descriptor
     */
    protected string $soft_descriptor;

    /** @var bool $installments Parcelamento ativo? */
    protected bool $installments;

    /**
     * Repasse de Juros de Parcelamento ativo? **somente contas antigas
     *
     * @var bool $installments_pass_interest
     */
    protected bool $installments_pass_interest;

    /** @var int $max_installments Número máximo de parcelas (Nr entre 1 a 12) */
    protected int $max_installments ;

    /**
     * Número de parcelas sem cobrança de juros ao cliente (Nr entre 1 a 12). **somente contas antigas**
     *
     * @var int $max_installments_without_interest
     */
    protected int $max_installments_without_interest;

    /**
     * Habilita o fluxo de pagamento em duas etapas (Autorização e Captura)
     *
     * @var bool $two_step_transaction
     */
    protected bool $two_step_transaction;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): ConfigurationCreditCard
    {
        $this->active = $active;
        return $this;
    }

    public function getSoftDescriptor(): string
    {
        return $this->soft_descriptor;
    }

    public function setSoftDescriptor(string $soft_descriptor): ConfigurationCreditCard
    {
        $this->soft_descriptor = $soft_descriptor;
        return $this;
    }

    public function isInstallments(): bool
    {
        return $this->installments;
    }

    public function setInstallments(bool $installments): ConfigurationCreditCard
    {
        $this->installments = $installments;
        return $this;
    }

    public function isInstallmentsPassInterest(): bool
    {
        return $this->installments_pass_interest;
    }

    public function setInstallmentsPassInterest(bool $installments_pass_interest): ConfigurationCreditCard
    {
        $this->installments_pass_interest = $installments_pass_interest;
        return $this;
    }

    public function getMaxInstallments(): string
    {
        return $this->max_installments;
    }

    public function setMaxInstallments(string $max_installments): ConfigurationCreditCard
    {
        $this->max_installments = $max_installments;
        return $this;
    }

    public function getMaxInstallmentsWithoutInterest(): string
    {
        return $this->max_installments_without_interest;
    }

    public function setMaxInstallmentsWithoutInterest(string $max_installments_without_interest
    ): ConfigurationCreditCard {
        $this->max_installments_without_interest = $max_installments_without_interest;
        return $this;
    }

    public function isTwoStepTransaction(): bool
    {
        return $this->two_step_transaction;
    }

    public function setTwoStepTransaction(bool $two_step_transaction): ConfigurationCreditCard
    {
        $this->two_step_transaction = $two_step_transaction;
        return $this;
    }

    public static function new(bool $active): self
    {
        return (new static())->setActive($active);
    }
}
