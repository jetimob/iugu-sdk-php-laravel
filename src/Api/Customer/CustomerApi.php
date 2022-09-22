<?php

namespace Jetimob\Iugu\Api\Customer;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\Customer;

class CustomerApi extends AbstractApi
{
    public function create(Customer $customer): CreateCustomerResponse
    {
        return $this->mappedPost('customers', CreateCustomerResponse::class, [
            RequestOptions::JSON => $customer
        ]);
    }
}
