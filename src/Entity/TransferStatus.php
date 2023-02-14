<?php

namespace Jetimob\Iugu\Entity;

enum TransferStatus: string
{
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case REJECTED = 'rejected';
    case REFUNDED = 'refunded';
    case DONE = 'done';
    case ERROR = 'error';
}
