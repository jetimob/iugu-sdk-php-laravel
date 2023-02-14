<?php

namespace Jetimob\Iugu\Entity;

class EarlyPaymentDiscount extends Entity
{
    /** @var int|null $days Número de dias antes do vencimento para aplicação do desconto. */
    protected ?int $days;

    /** @var float|null $percent Valor do desconto em porcentagem. Não pode ser usado com value_cents. */
    protected ?float $percent;

    /** @var int|null $value_cents Valor do desconto em centavos. Não pode ser usado com percent. */
    protected ?int $value_cents;

    public function getDays(): ?int
    {
        return $this->days;
    }

    public function setDays(?int $days): EarlyPaymentDiscount
    {
        $this->days = $days;
        return $this;
    }

    public function getPercent(): ?float
    {
        return $this->percent;
    }

    public function setPercent(?float $percent): EarlyPaymentDiscount
    {
        $this->percent = $percent;
        return $this;
    }

    public function getValueCents(): ?int
    {
        return $this->value_cents;
    }

    public function setValueCents(?int $value_cents): EarlyPaymentDiscount
    {
        $this->value_cents = $value_cents;
        return $this;
    }

    public function newWithPercent(int $days, float $percent): self
    {
        return (new static())
            ->setDays($days)
            ->setPercent($percent);
    }

    public function newWithValueCents(int $days, int $value_cents): self
    {
        return (new static())
            ->setDays($days)
            ->setValueCents($value_cents);
    }
}
