<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Charge\ChargeApi;
use Jetimob\Iugu\Entity\Charge;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class ChargeApiTest extends AbstractTestCase
{
    protected ChargeApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::charge();
    }

    /** @test */
    public function chargeApiShouldExists(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(ChargeApi::class, $this->api);
    }
}
