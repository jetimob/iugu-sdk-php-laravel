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

    public function update(string $id, Customer $customer): UpdateCustomerResponse
    {
        return $this->mappedPut("customers/$id", UpdateCustomerResponse::class, [
            RequestOptions::JSON => $customer
        ]);
    }

    public function delete(string $id): DeleteCustomerResponse
    {
        return $this->mappedRequest(
            'delete',
            "customers/$id",
            DeleteCustomerResponse::class,
            []
        );
    }
}
