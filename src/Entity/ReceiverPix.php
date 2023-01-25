<?php

namespace Jetimob\Iugu\Entity;

class ReceiverPix extends Entity
{
    /** @var string $key Chave pix */
    protected string $key;

    /** @var string $type Tipo da chave, valores possíveis em {@see PixType} */
    protected string $type;

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): ReceiverPix
    {
        $this->key = $key;
        return $this;
    }

    public function getType(): PixType
    {
        return PixType::from($this->type);
    }

    public function setType(PixType $type): ReceiverPix
    {
        $this->type = $type->value;
        return $this;
    }
}
