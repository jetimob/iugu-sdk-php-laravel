<?php

namespace Jetimob\Iugu\Api\Webhook;

class TransferStatusChangedEvent extends WebhookEvent
{
    protected TransferStatusChangedData $data;

    public function getData(): TransferStatusChangedData
    {
        return $this->data;
    }
}
