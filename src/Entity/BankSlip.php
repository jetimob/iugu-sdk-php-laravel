<?php

namespace Jetimob\Iugu\Entity;

class BankSlip extends Entity
{
    protected ?string $digitable_line = null;
    protected ?string $barcode_data = null;
    protected ?string $barcode = null;
    protected ?string $bank_slip_url = null;
    protected ?string $bank_slip_pdf_url = null;
    protected ?int $bank_slip_bank = null;
    protected ?string $bank_slip_status = null;
    protected ?string $recipient_cpf_cnpj = null;

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

    public function getBankSlipUrl(): ?string
    {
        return $this->bank_slip_url;
    }

    public function getBankSlipPdfUrl(): ?string
    {
        return $this->bank_slip_pdf_url;
    }

    public function getBankSlipBank(): ?int
    {
        return $this->bank_slip_bank;
    }

    public function getBankSlipStatus(): ?string
    {
        return $this->bank_slip_status;
    }

    public function getRecipientCpfCnpj(): ?string
    {
        return $this->recipient_cpf_cnpj;
    }
}
