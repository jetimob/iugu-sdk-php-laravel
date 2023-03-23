<?php

namespace Jetimob\Iugu\Entity;

use Jetimob\Http\Traits\Serializable;

class TransferWebhookReceiverAccount
{
    use Serializable;

    protected string $ispb;
    protected string $name;
    protected string $cpf_cnpj;
    protected string $bank_name;
    protected string $bank;
    protected string $bank_branch;
    protected ?string $bank_branch_digit = null;
    protected string $bank_account;
    protected ?string $bank_account_digit = null;
    protected string $bank_account_type;
    protected ?string $pix_key = null;

    /**
     * @return string
     */
    public function getIspb(): string
    {
        return $this->ispb;
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
    public function getBankName(): string
    {
        return $this->bank_name;
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
    public function getBankBranch(): string
    {
        return $this->bank_branch;
    }

    /**
     * @return string|null
     */
    public function getBankBranchDigit(): ?string
    {
        return $this->bank_branch_digit;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bank_account;
    }

    /**
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bank_account_digit;
    }

    /**
     * @return string
     */
    public function getBankAccountType(): string
    {
        return $this->bank_account_type;
    }

    /**
     * @return string|null
     */
    public function getPixKey(): ?string
    {
        return $this->pix_key;
    }
}