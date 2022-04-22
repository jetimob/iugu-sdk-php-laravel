<?php

namespace Jetimob\Iugu\Entity;

class InvoiceCustomVariable extends Entity
{
    /** @var string|null $name Nome da variável */
    protected ?string $name;

    /** @var string|null $value Valor da variável */
    protected ?string $value;
}
