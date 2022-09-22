<?php

namespace Jetimob\Iugu\Api\Customer;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\Customer;
use Jetimob\Iugu\Entity\PaymentMethod;

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

    public function createPaymentMethod(string $clientId, PaymentMethod $paymentMethod): CreatePaymentMethodResponse
    {
        return $this->mappedPut(
            "customers/$clientId/payment_methods",
            CreatePaymentMethodResponse::class,
            [RequestOptions::JSON => $paymentMethod]
        );
    }

    public function deletePaymentMethod(string $clientId, string $paymentMethodId): DeletePaymentMethodResponse
    {
        return $this->mappedRequest(
            'delete',
            "customers/$clientId/payment_methods/$paymentMethodId",
            DeletePaymentMethodResponse::class,
            []
        );
    }
}
