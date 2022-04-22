<?php

namespace Jetimob\Iugu\Entity;

class InvoiceResponseItem extends Entity
{
    protected string $id;
    protected string $description;
    protected int $price_cents;
    protected int $quantity;
    protected string $created_at;
    protected string $updated_at;
    protected string $price;
}
