<?php

namespace Jetimob\Iugu\Entity;

class CreditCardTransaction extends Entity
{
    protected string $status;
    protected string $message;
    protected bool $success;
    protected string $lr;
    protected bool $reversible;
    protected string $token;
    protected string $brand;
    protected string $bin;
    protected string $last4;
    protected string $created_at;
    protected string $updated_at;
    protected string $authorized_at;
    protected string $captured_at;
    protected string $canceled_at;
}
