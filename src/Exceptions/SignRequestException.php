<?php

namespace Jetimob\Iugu\Exceptions;

class SignRequestException extends \Exception implements IuguException
{
    protected $message = 'Ocorreu um erro ao assinar a requisição';
}
