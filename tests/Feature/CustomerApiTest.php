<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Customer\CustomerApi;
use Jetimob\Iugu\Entity\Customer;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class CustomerApiTest extends AbstractTestCase
{
    protected CustomerApi $api;
    protected Customer $customer;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::customer();
        $this->customer = (new Customer())
            ->setName('Alexandre Moreira Medina')
            ->setEmail('alexandre@jetimob.com')
            ->setCpfCnpj('17587095292')
            ->setZipCode('97015030')
            ->setStreet('Rua Appel')
            ->setNumber('347')
            ->setDistrict('Nossa Sra. de Fátima')
            ->setCity('Santa Maria')
            ->setState('Rio Grande do Sul');
    }

    /** @test */
    public function createCustomerShouldSuccess(): string
    {
        $res = $this->api->create($this->customer);

        $this->assertSame(200, $res->getStatusCode());

        return $res->getId();
    }

    /**
     * @depends createCustomerShouldSuccess
     * @test
     */
    public function updateCustomerShouldSuccess(string $id): void
    {
        $newName = 'Alex Alexandre Souza Campos';
        $this->customer->setName($newName);

        $res = $this->api->update($id, $this->customer);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($newName, $res->getName());
    }
}
