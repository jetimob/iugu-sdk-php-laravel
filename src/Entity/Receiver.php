<?php

namespace Jetimob\Iugu\Entity;

class Receiver extends Entity
{
    /** @var string $name Nome do recebedor */
    protected string $name;

    /** @var string CPF ou CNPJ do recebedor. Apenas números */
    protected string $cpf_cnpj;

    /** @var Bank $bank Dados bancários. Obrigatório se for TED ou PIX para conta bancária */
    protected Bank $bank;

    /** @var ReceiverPix $pix Dados da chave pix */
    protected ReceiverPix $pix;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Receiver
    {
        $this->name = $name;
        return $this;
    }

    public function getCpfCnpj(): string
    {
        return $this->cpf_cnpj;
    }

    public function setCpfCnpj(string $cpf_cnpj): Receiver
    {
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function getBank(): Bank
    {
        return $this->bank;
    }

    public function setBank(Bank $bank): Receiver
    {
        $this->bank = $bank;
        return $this;
    }

    public function getPix(): ReceiverPix
    {
        return $this->pix;
    }

    public function setPix(ReceiverPix $pix): Receiver
    {
        $this->pix = $pix;
        return $this;
    }
}