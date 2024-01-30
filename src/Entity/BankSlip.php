<?php

namespace Jetimob\Iugu\Entity;

class BankSlip extends Entity
{
    protected ?string $digitable_line = null;
    protected ?string $barcode_data = null;
    protected ?string $barcode = null;

    public function getDigitableLine(): ?string
    {
        return $this->digitable_line;
    }

    public function getBarcodeData(): ?string
    {
        return $this->barcode_data;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }
}
