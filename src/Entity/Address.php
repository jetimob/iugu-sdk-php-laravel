<?php

namespace Jetimob\Iugu\Entity;

class Address extends Entity
{
    protected string $zip_code;
    protected string $street;
    protected string $number;
    protected ?string $district;
    protected string $city;
    protected string $state;
    protected string $country;
    protected ?string $complement;

    public function getZipCode(): string
    {
        return $this->zip_code;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setZipCode(string $zip_code): Address
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    public function setNumber(string $number): Address
    {
        $this->number = $number;
        return $this;
    }

    public function setDistrict(?string $district): Address
    {
        $this->district = $district;
        return $this;
    }

    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function setState(string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    public static function new(
        string $zipcode,
        string $street,
        string $number,
        string $city,
        string $state,
        string $country
    ): self {
        return (new static())
            ->setZipCode($zipcode)
            ->setStreet($street)
            ->setNumber($number)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country);
    }
}
