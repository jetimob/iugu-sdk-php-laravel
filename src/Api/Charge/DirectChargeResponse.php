<?php

namespace Jetimob\Iugu\Api\Charge;

use Jetimob\Http\Response;

class DirectChargeResponse extends Response
{
    protected string $message;
    protected string $errors;
    protected bool $success;
    protected string $url;
    protected string $pdf;
    protected ?string $identification;
    protected string $invoice_id;
    protected ?string $LR;
    protected ?bool $reversible;
    protected ?string $token;
    protected ?string $brand;
    protected ?string $bin;
    protected ?string $last4;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getErrors(): string
    {
        return $this->errors;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getPdf(): string
    {
        return $this->pdf;
    }

    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    public function getInvoiceId(): string
    {
        return $this->invoice_id;
    }

    public function getLR(): ?string
    {
        return $this->LR;
    }

    public function getReversible(): ?bool
    {
        return $this->reversible;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function getBin(): ?string
    {
        return $this->bin;
    }

    public function getLast4(): ?string
    {
        return $this->last4;
    }
}
