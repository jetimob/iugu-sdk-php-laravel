<?php

namespace Jetimob\Iugu\Entity;

class Split extends Entity
{
    /** @var string|null $recipient_account_id ID Da conta que irá receber o split */
    protected ?string $recipient_account_id;

    /** @var int|null $cents Centavos a serem cobrados da fatura */
    protected ?int $cents;

    /** @var float|null Porcentagem a ser cobrada da fatura */
    protected ?float $percent;

    /** @var int|null $bank_slip_cents Valor em centavos a ser cobrado apenas em transações no boleto. */
    protected ?int $bank_slip_cents;

    /** @var float|null $bank_slip_percent Valor em porcentagem a ser cobrado apenas em transações no boleto.  */
    protected ?float $bank_slip_percent;

    /** @var int|null $card_slip_cents Valor em centavos a ser cobrado apenas em transações no cartão de crédito. */
    protected ?int $card_slip_cents;

    /** @var float|null $card_slip_percent Valor em porcentagem a ser cobrado apenas em transações no cartão de crédito. */
    protected ?float $card_slip_percent;

    /** @var int|null $pix_cents Valor em centavos a ser cobrado apenas em transações no pix. */
    protected ?int $pix_cents;

    /** @var float|null $pix_percent Valor em porcentagem a ser cobrado apenas em transações no pix. */
    protected ?float $pix_percent;

    /** @var bool|null $permit_aggregated Permite agregar comissionamento percentual + fixo. */
    protected ?bool $permit_aggregated;

    /** @var string $credit_card_1x_cents Valor em centavos a ser cobrado apenas em transações em 1x no cartão de crédito. */
    protected string $credit_card_1x_cents;
    protected string $credit_card_2x_cents;
    protected string $credit_card_3x_cents;
    protected string $credit_card_4x_cents;
    protected string $credit_card_5x_cents;
    protected string $credit_card_6x_cents;
    protected string $credit_card_7x_cents;
    protected string $credit_card_8x_cents;
    protected string $credit_card_9x_cents;
    protected string $credit_card_10x_cents;
    protected string $credit_card_11x_cents;
    protected string $credit_card_12x_cents;

    /** @var string $credit_card_1x_percent Valor em porcentagem a ser cobrado apenas em transações em 1x no cartão de crédito. */
    protected string $credit_card_1x_percent;
    protected string $credit_card_2x_percent;
    protected string $credit_card_3x_percent;
    protected string $credit_card_4x_percent;
    protected string $credit_card_5x_percent;
    protected string $credit_card_6x_percent;
    protected string $credit_card_7x_percent;
    protected string $credit_card_8x_percent;
    protected string $credit_card_9x_percent;
    protected string $credit_card_10x_percent;
    protected string $credit_card_11x_percent;
    protected string $credit_card_12x_percent;
}
