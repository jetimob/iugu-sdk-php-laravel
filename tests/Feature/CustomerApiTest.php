<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Customer\CustomerApi;
use Jetimob\Iugu\Entity\Customer;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class CustomerApiTest extends AbstractTestCase
{
    protected CustomerApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::customer();
    }

    /** @test */
    public function createCustomerShouldSuccess(): void
    {
        $customer = new Customer();
        $customer->setName('Alexandre Moreira Medina')
            ->setEmail('alexandre@jetimob.com')
            ->setCpfCnpj('17587095292')
            ->setZipCode('97015030')
            ->setStreet('Rua Appel')
            ->setNumber('347')
            ->setDistrict('Nossa Sra. de Fátima')
            ->setCity('Santa Maria')
            ->setState('Rio Grande do Sul');

        $res = $this->api->create($customer);

        $this->assertSame(200, $res->getStatusCode());
    }
}
