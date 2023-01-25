<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Account\AccountApi;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class AccountApiTest extends AbstractTestCase
{
    protected AccountApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::account();
    }

    /** @test */
    public function accountApiShouldExists(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(AccountApi::class, $this->api);
    }

    /** @test */
    public function getAccountInfoShouldSuccess(): void
    {
        $id = '';
        $res = $this->api->info($id);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($id, $res->getId());
        dump($res);
    }
}
