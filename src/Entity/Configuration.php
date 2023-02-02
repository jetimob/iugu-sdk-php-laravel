<?php

namespace Jetimob\Iugu\Entity;

class Configuration extends Entity
{
    protected ?float $commission_percent;
    protected ConfigurationBankSlip $bank_slip;
    protected ConfigurationCreditCard $credit_card;

    public function getCommissionPercent(): ?float
    {
        return $this->commission_percent;
    }

    public function getBankSlip(): ConfigurationBankSlip
    {
        return $this->bank_slip;
    }

    public function getCreditCard(): ConfigurationCreditCard
    {
        return $this->credit_card;
    }
}
