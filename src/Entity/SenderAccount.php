<?php

namespace Jetimob\Iugu\Entity;

class SenderAccount extends Entity
{
    protected string $id;
    protected string $name;
    protected ?string $account_type;
    protected ?string $account_number;
    protected ?string $bank;
    protected ?string $bank_agency;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAccountType(): ?string
    {
        return $this->account_type;
    }

    public function getAccountNumber(): ?string
    {
        return $this->account_number;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function getBankAgency(): ?string
    {
        return $this->bank_agency;
    }
}
