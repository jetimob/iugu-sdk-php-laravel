<?php

namespace Jetimob\Iugu\Facades;

use Illuminate\Support\Facades\Facade;
use Jetimob\Iugu\Api\Account\AccountApi;
use Jetimob\Iugu\Api\Charge\ChargeApi;
use Jetimob\Iugu\Api\Customer\CustomerApi;
use Jetimob\Iugu\Api\Invoice\InvoiceApi;
use Jetimob\Iugu\Api\Signature\SignatureApi;
use Jetimob\Iugu\Api\Transfer\TransferApi;
use Jetimob\Iugu\Api\Webhook\WebhookApi;

/**
 *
 * @method static AccountApi account()
 * @method static ChargeApi charge()
 * @method static CustomerApi customer()
 * @method static InvoiceApi invoice()
 * @method static SignatureApi signature()
 * @method static TransferApi transfer()
 * @method static WebhookApi webhook()
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