<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Signature\SignatureApi;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class SignatureApiTest extends AbstractTestCase
{
    protected SignatureApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::signature();
    }

    /** @test */
    public function validateSignatureShouldSuccess(): void
    {
        $res = $this->api->validate();
        $this->assertSame("ok", $res->getStatus());
    }
}
