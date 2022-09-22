<?php

namespace Jetimob\Iugu\Api\Customer;

use Jetimob\Http\Response;

abstract class CustomerResponse extends Response
{
    protected string $id;
    protected ?string $email = null;
    protected string $name;
    protected ?string $notes = null;
    protected string $created_at;
    protected string $updated_at;

    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }
}
