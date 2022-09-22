<?php

namespace Jetimob\Iugu\Entity;

class PaymentMethodData extends Entity
{
    protected string $holder_name;
    protected string $display_number;
    protected string $brand;
    protected int $month;
    protected int $year;

    public function getHolderName(): string
    {
        return $this->holder_name;
    }

    public function getDisplayNumber(): string
    {
        return $this->display_number;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
