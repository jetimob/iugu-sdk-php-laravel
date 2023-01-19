<?php

namespace Jetimob\Iugu\Entity;

class Bank extends Entity
{
    /** @var string $compe Número do banco. Obrigatório caso não seja enviado isbp */
    protected string $compe;

    /** @var string $isbp Código do banco. Obrigatório caso não seja enviado compe */
    protected string $isbp;

    /** @var string $branch Agência. Não precisa informar o dígito */
    protected string $branch;

    /**
     * Número da conta + dígito da counta (se houver). Não precisa colocar traço para separar o dígito
     * @var string $account
     */
    protected string $account;

    /** @var string $account_type Tipo de conta, valores possíveis em {@see AccountType} */
    protected string $account_type;

    public function getCompe(): string
    {
        return $this->compe;
    }

    public function setCompe(string $compe): Bank
    {
        $this->compe = $compe;
        return $this;
    }

    public function getIsbp(): string
    {
        return $this->isbp;
    }

    public function setIsbp(string $isbp): Bank
    {
        $this->isbp = $isbp;
        return $this;
    }

    public function getBranch(): string
    {
        return $this->branch;
    }

    public function setBranch(string $branch): Bank
    {
        $this->branch = $branch;
        return $this;
    }

    public function getAccount(): string
    {
        return $this->account;
    }

    public function setAccount(string $account): Bank
    {
        $this->account = $account;
        return $this;
    }

    public function getAccountType(): AccountType
    {
        return AccountType::from($this->account_type);
    }

    public function setAccountType(AccountType $account_type): Bank
    {
        $this->account_type = $account_type->value;
        return $this;
    }
}
