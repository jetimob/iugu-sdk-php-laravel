<?php

namespace Jetimob\Iugu\Api\Customer;

use Jetimob\Http\Response;
use Jetimob\Iugu\Entity\PaymentMethodData;

abstract class PaymentMethodResponse extends Response
{
    protected string $id;
    protected ?string $description = null;
    protected string $item_type;
    protected PaymentMethodData $data;

    public function getId(): string
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getItemType(): string
    {
        return $this->item_type;
    }

    public function getData(): PaymentMethodData
    {
        return $this->data;
    }
}
