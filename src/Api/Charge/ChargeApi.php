<?php

namespace Jetimob\Iugu\Api\Charge;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\Charge;

class ChargeApi extends AbstractApi
{
    public function directCharge(Charge $charge): DirectChargeResponse
    {
        return $this->mappedPost('charge', DirectChargeResponse::class, [
            RequestOptions::JSON => $charge
        ]);
    }
}
