<?php

namespace Jetimob\Iugu\Entity;

class ReceiverAccount extends Entity
{
    protected string $name;
    protected string $cpf_cnpj;
    protected ?string $bank;
    protected ?string $ispb;
    protected ?string $account;
    protected ?string $account_type;
    protected ?string $pix_key_type;
    protected ?string $pix_key;

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpfCnpj(): string
    {
        return $this->cpf_cnpj;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function getIspb(): ?string
    {
        return $this->ispb;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function getAccountType(): ?string
    {
        return $this->account_type;
    }

    public function getPixKeyType(): ?string
    {
        return $this->pix_key_type;
    }

    public function getPixKey(): ?string
    {
        return $this->pix_key;
    }
}
