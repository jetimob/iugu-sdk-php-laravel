<?php

namespace Jetimob\Iugu\Entity;

class Pix extends Entity
{
    protected ?string $qrcode;
    protected ?string $qrcode_text;

    public function getQrcode(): ?string
    {
        return $this->qrcode;
    }

    public function getQrcodeText(): ?string
    {
        return $this->qrcode_text;
    }
}
