<?php

namespace Jetimob\Iugu\Entity;

use Jetimob\Http\Traits\Serializable;

class TransferWebhookSenderAccount
{
    use Serializable;

    protected string $account_id;
    protected string $name;
    protected string $cpf_cnpj;
    protected string $account_type;
    protected string $account_number;
    protected string $bank;
    protected string $bank_agency;

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->account_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCpfCnpj(): string
    {
        return $this->cpf_cnpj;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->account_type;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->account_number;
    }

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @return string
     */
    public function getBankAgency(): string
    {
        return $this->bank_agency;
    }
}