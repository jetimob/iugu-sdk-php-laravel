<?php

namespace Jetimob\Iugu\Entity;

class Payer extends Entity
{
    /** @var string $cpf_cnpj CPF ou CNPJ do cliente (apenas números) */
    protected string $cpf_cnpj;

    /** @var string $name Nome (utilizado como sacado no boleto) */
    protected string $name;

    /** @var string|null $phone_prefix Prefixo (DDD) do telefone em dois dígitos */
    protected ?string $phone_prefix;

    /** @var string|null $phone Telefone do cliente */
    protected ?string $phone;

    /** @var string|null $email Email do cliente */
    protected ?string $email;

    /** @var Address $address Endereço do cliente */
    protected Address $address;

    public function getCpfCnpj(): string
    {
        return $this->cpf_cnpj;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhonePrefix(): ?string
    {
        return $this->phone_prefix;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setCpfCnpj(?string $cpf_cnpj): Payer
    {
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function setName(?string $name): Payer
    {
        $this->name = $name;
        return $this;
    }

    public function setPhonePrefix(?string $phone_prefix): Payer
    {
        $this->phone_prefix = $phone_prefix;
        return $this;
    }

    public function setPhone(?string $phone): Payer
    {
        $this->phone = $phone;
        return $this;
    }

    public function setEmail(?string $email): Payer
    {
        $this->email = $email;
        return $this;
    }

    public function setAddress(?Address $address): Payer
    {
        $this->address = $address;
        return $this;
    }

    public static function new(string $name, string $cpfCnpj, Address $address): self
    {
        return (new static())
            ->setName($name)
            ->setCpfCnpj($cpfCnpj)
            ->setAddress($address);
    }
}
