<?php

namespace Jetimob\Iugu\Entity;

class KeyValue extends Entity
{
    protected string $key;
    protected string $value;

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): KeyValue
    {
        $this->key = $key;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): KeyValue
    {
        $this->value = $value;
        return $this;
    }
}
