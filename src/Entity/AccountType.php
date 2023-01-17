<?php

namespace Jetimob\Iugu\Entity;

enum AccountType: string
{
    /** Conta corrente */
    case CHECKING_ACCOUNT = 'checking_account';
    /** Conta salário */
    case SALARY_ACCOUNT = 'salary_account';
    /** Poupança */
    case SAVINGS_ACCOUNT = 'savings_account';
    /** Conta de pagamento */
    case PAYMENT_ACCOUNT = 'payment_account';
}
