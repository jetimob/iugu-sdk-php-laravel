<?php

namespace Jetimob\Iugu\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class IuguRequestException extends RequestException implements IuguException, HydratableContract
{
    use Serializable;
}
