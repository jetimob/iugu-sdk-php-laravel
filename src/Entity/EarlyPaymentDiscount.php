<?php

namespace Jetimob\Iugu\Entity;

class EarlyPaymentDiscount extends Entity
{
    /** @var int|null $days Número de dias antes do vencimento para aplicação do desconto. */
    protected ?int $days;

    /** @var float|null $percent Valor do desconto em porcentagem. Não pode ser usado com value_cents. */
    protected ?float $percent;

    /** @var int|null $value_cents Valor do desconto em centavos. Não pode ser usado com percent. */
    protected ?int $value_cents;
}
