<?php

namespace Jetimob\Iugu\Entity;

enum PayableWith: string
{
    CASE ALL = 'all';
    CASE CREDIT_CARD = 'credit_card';
    CASE BANK_SLIP = 'bank_slip';
    CASE PIX = 'pix';
}
