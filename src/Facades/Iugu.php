<?php

namespace Jetimob\Iugu\Facades;

use Illuminate\Support\Facades\Facade;
use Jetimob\Iugu\Api\Charge\ChargeApi;
use Jetimob\Iugu\Api\Customer\CustomerApi;
use Jetimob\Iugu\Api\Invoice\InvoiceApi;

/**
 *
 * @method static ChargeApi charge()
 * @method static CustomerApi customer()
 * @method static InvoiceApi invoice()
 */
class Iugu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     */
    public static function getFacadeAccessor(): string
    {
        return 'jetimob.iugu';
    }
}