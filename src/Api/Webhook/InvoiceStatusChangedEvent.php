<?php

namespace Jetimob\Iugu\Api\Webhook;

class InvoiceStatusChangedEvent extends WebhookEvent
{
    protected InvoiceStatusChangedData $data;

    public function getData(): ?InvoiceStatusChangedData
    {
        return $this->data ?? null;
    }
}
