<?php

namespace Jetimob\Iugu\Api\Webhook;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;

class WebhookApi extends AbstractApi
{
    public function create(IuguWebhookEvent $event, string $url, ?string $authorization = null): CreateWebhookResponse
    {
        return $this->mappedPost('web_hooks', CreateWebhookResponse::class, [
            RequestOptions::JSON => [
                'event' => $event->value,
                'url' => $url,
                'authorization' => $authorization,
            ]
        ]);
    }

    public function remove(string $id): RemoveWebhookResponse
    {
        return $this->mappedRequest('delete', "web_hooks/$id", RemoveWebhookResponse::class, []);
    }
}
