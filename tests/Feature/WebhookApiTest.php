<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Webhook\IuguWebhookEvent;
use Jetimob\Iugu\Api\Webhook\WebhookApi;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class WebhookApiTest extends AbstractTestCase
{
    protected WebhookApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::webhook();
    }

    /** @test */
    public function webhookApiShouldExists(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(WebhookApi::class, $this->api);
    }

    /** @test */
    public function createWebhookShouldSuccess(): void
    {
        $event = IuguWebhookEvent::SUBSCRIPTION_CREATED;
        $url = 'https://app.jetdev.com/iugu/subscription_created';
        $res = $this->api->create($event, $url);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($event->value, $res->getEvent());
        $this->assertSame($url, $res->getUrl());
    }

    /** @test */
    public function removeWebhookShouldSuccess(): void
    {
        $res = $this->api->remove('');
        $this->assertSame(200, $res->getStatusCode());
    }
}
