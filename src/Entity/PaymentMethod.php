<?php

namespace Jetimob\Iugu\Entity;

class PaymentMethod extends Entity
{
    protected string $description;
    protected string $token;
    protected ?bool $set_as_default;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): PaymentMethod
    {
        $this->description = $description;
        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): PaymentMethod
    {
        $this->token = $token;
        return $this;
    }

    public function isSetAsDefault(): ?bool
    {
        return $this->set_as_default;
    }

    public function setSetAsDefault(?bool $set_as_default): PaymentMethod
    {
        $this->set_as_default = $set_as_default;
        return $this;
    }
}
