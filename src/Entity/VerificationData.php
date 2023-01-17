<?php

namespace Jetimob\Iugu\Entity;

/** @link https://dev.iugu.com/reference/enviar-verificacao-de-conta */
class VerificationData extends Entity
{
    /**
     * Valor máximo da venda ('Até R$ 100,00', 'Entre R$ 100,00 e R$ 500,00', 'Mais que R$ 500,00')
     *
     * @var string $price_range
     */
    protected string $price_range;

    /** @var bool $physical_products Vende produtos físicos? */
    protected bool $physical_products;

    /** @var string $business_type Descrição do negócio */
    protected string $business_type;

    /** @var string $person_type 'Pessoa Física' ou 'Pessoa Jurídica' */
    protected string $person_type;

    /** @var bool $automatic_transfer Saque automático (Recomendamos que envie 'true') */
    protected bool $automatic_transfer;

    /** @var string|null $cnpj CNPJ caso Pessoa Jurídica (apenas números) */
    protected ?string $cnpj = null;

    /** @var string|null $cpf CPF caso Pessoa Física (apenas números) */
    protected ?string $cpf = null;

    /** @var string|null $company_name Nome da Empresa, caso Pessoa Jurídica */
    protected ?string $company_name = null;

    /** @var string|null $name Nome caso Pessoa Física */
    protected ?string $name = null;

    /** @var string $address Endereço */
    protected string $address;

    /** @var string $cep CEP */
    protected string $cep;

    /** @var string $city Cidade */
    protected string $city;

    /** @var string $district Bairro */
    protected string $district;

    /** @var string $state Estado */
    protected string $state;

    /** @var string|null $telephone Telefone */
    protected ?string $telephone = null;

    /** @var string|null $resp_name Nome do Responsável, caso Pessoa Jurídica */
    protected ?string $resp_name = null;

    /** @var string|null $res_cpf CPF do Responsável, caso Pessoa Jurídica */
    protected ?string $res_cpf = null;

    /** @var string $bank 'Itaú', 'Bradesco', 'Caixa Econômica' */
    protected string $bank;

    /** @var string $bank_ag Agência da Conta */
    protected string $bank_ag;

    /** @var string $account_type 'Corrente', 'Poupança' */
    protected string $account_type;

    /** @var string $bank_cc Número da Conta */
    protected string $bank_cc;

    public function getPriceRange(): string
    {
        return $this->price_range;
    }

    public function setPriceRange(string $price_range): VerificationData
    {
        $this->price_range = $price_range;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhysicalProducts(): bool
    {
        return $this->physical_products;
    }

    public function setPhysicalProducts(bool $physical_products): VerificationData
    {
        $this->physical_products = $physical_products;
        return $this;
    }

    public function getBusinessType(): string
    {
        return $this->business_type;
    }

    public function setBusinessType(string $business_type): VerificationData
    {
        $this->business_type = $business_type;
        return $this;
    }

    public function getPersonType(): string
    {
        return $this->person_type;
    }

    public function setPersonType(string $person_type): VerificationData
    {
        $this->person_type = $person_type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutomaticTransfer(): bool
    {
        return $this->automatic_transfer;
    }

    public function setAutomaticTransfer(bool $automatic_transfer): VerificationData
    {
        $this->automatic_transfer = $automatic_transfer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): VerificationData
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): VerificationData
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(?string $company_name): VerificationData
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): VerificationData
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): VerificationData
    {
        $this->address = $address;
        return $this;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): VerificationData
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): VerificationData
    {
        $this->city = $city;
        return $this;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $district): VerificationData
    {
        $this->district = $district;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): VerificationData
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): VerificationData
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRespName(): ?string
    {
        return $this->resp_name;
    }

    public function setRespName(?string $resp_name): VerificationData
    {
        $this->resp_name = $resp_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResCpf(): ?string
    {
        return $this->res_cpf;
    }

    public function setResCpf(?string $res_cpf): VerificationData
    {
        $this->res_cpf = $res_cpf;
        return $this;
    }

    public function getBank(): string
    {
        return $this->bank;
    }

    public function setBank(string $bank): VerificationData
    {
        $this->bank = $bank;
        return $this;
    }

    public function getBankAg(): string
    {
        return $this->bank_ag;
    }

    public function setBankAg(string $bank_ag): VerificationData
    {
        $this->bank_ag = $bank_ag;
        return $this;
    }

    public function getAccountType(): string
    {
        return $this->account_type;
    }

    public function setAccountType(string $account_type): VerificationData
    {
        $this->account_type = $account_type;
        return $this;
    }

    public function getBankCc(): string
    {
        return $this->bank_cc;
    }

    public function setBankCc(string $bank_cc): VerificationData
    {
        $this->bank_cc = $bank_cc;
        return $this;
    }
}
