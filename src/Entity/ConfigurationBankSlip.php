<?php

namespace Jetimob\Iugu\Entity;

class ConfigurationBankSlip extends Entity
{
    protected bool $active;
    protected string $extra_due;
    protected string $reprint_extra_due;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): ConfigurationBankSlip
    {
        $this->active = $active;
        return $this;
    }

    public function getExtraDue(): string
    {
        return $this->extra_due;
    }

    public function setExtraDue(string $extra_due): ConfigurationBankSlip
    {
        $this->extra_due = $extra_due;
        return $this;
    }

    public function getReprintExtraDue(): string
    {
        return $this->reprint_extra_due;
    }

    public function setReprintExtraDue(string $reprint_extra_due): ConfigurationBankSlip
    {
        $this->reprint_extra_due = $reprint_extra_due;
        return $this;
    }
}
