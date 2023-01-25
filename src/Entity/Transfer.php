<?php

namespace Jetimob\Iugu\Entity;

class Transfer extends Entity
{
    /** @var string $transfer_type Tipo de transferência, valores possíveis no enum {@see TransferType} */
    protected string $transfer_type;

    /** @var int $amount_cents Valor a ser transferido em centavos. Ex: 10000 (se for R$ 100,00) */
    protected int $amount_cents;

    /**
     *  Motivo da transferência. No caso de TED, é o que aparece no comprovante e no caso de pix, é a mensagem
     * @var string|null $reason
     */
    protected ?string $reason = null;

    protected bool $test_mode = false;

    /** @var Receiver $receiver Dados do recebedor */
    protected Receiver $receiver;

    public function getTransferType(): TransferType
    {
        return TransferType::from($this->transfer_type);
    }

    public function setTransferType(TransferType $transfer_type): Transfer
    {
        $this->transfer_type = $transfer_type->value;
        return $this;
    }

    public function getAmountCents(): int
    {
        return $this->amount_cents;
    }

    public function setAmountCents(int $amount_cents): Transfer
    {
        $this->amount_cents = $amount_cents;
        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): Transfer
    {
        $this->reason = $reason;
        return $this;
    }

    public function isTestMode(): bool
    {
        return $this->test_mode;
    }

    public function setTestMode(bool $test_mode): Transfer
    {
        $this->test_mode = $test_mode;
        return $this;
    }

    public function getReceiver(): Receiver
    {
        return $this->receiver;
    }

    public function setReceiver(Receiver $receiver): Transfer
    {
        $this->receiver = $receiver;
        return $this;
    }
}
