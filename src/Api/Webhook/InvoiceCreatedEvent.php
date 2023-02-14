<?php

namespace Jetimob\Iugu\Api\Webhook;

class InvoiceCreatedEvent extends WebhookEvent
{
    protected InvoiceCreatedData $data;

    public function getData(): InvoiceCreatedData
    {
        return $this->data;
    }
}
