<?php

namespace Jetimob\Iugu\Entity;

class CreditCardTransaction extends Entity
{
    protected ?string $status = null;
    protected ?string $message = null;
    protected ?bool $success = null;
    protected ?string $lr = null;
    protected ?bool $reversible = null;
    protected ?string $token = null;
    protected ?string $brand = null;
    protected ?string $bin = null;
    protected ?string $last4 = null;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;
    protected ?string $authorized_at = null;
    protected ?string $captured_at = null;
    protected ?string $canceled_at = null;
}
