<?php

namespace Jetimob\Iugu\Entity;

use Jetimob\Http\Exceptions\InvalidArgumentException;

class InvoiceItem extends Entity
{
    /** @var string $description Descrição do item */
    protected string $description;

    /** @var int $quantity Quantidade do item */
    protected int $quantity;

    /** @var int$price_cents Preço do item em centavos. Valor mínimo 100.*/
    protected int $price_cents;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getPriceCents(): ?int
    {
        return $this->price_cents;
    }

    /**
     * @param string $description
     *
     * @return InvoiceItem
     */
    public function setDescription(string $description): InvoiceItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int  $quantity
     *
     * @return InvoiceItem
     */
    public function setQuantity(?int $quantity): InvoiceItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param int  $price_cents
     *
     * @return InvoiceItem
     */
    public function setPriceCents(?int $price_cents): InvoiceItem
    {
        if ($price_cents < 100) {
            throw new InvalidArgumentException('InvoiceItem $price_cents => min value: 100');
        }

        $this->price_cents = $price_cents;
        return $this;
    }

    public static function new(string $description, int $priceCents, int $quantity): self
    {
        return (new static())
            ->setDescription($description)
            ->setPriceCents($priceCents)
            ->setQuantity($quantity);
    }
}
