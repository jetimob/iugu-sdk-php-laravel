<?php

namespace Jetimob\Iugu\Entity;

enum PixType: string
{
    case CPF = 'cpf';
    case CNPJ = 'cnpj';
    case EMAIL = 'email';
    /** Chave aleatória */
    case EVP = 'evp';
}
