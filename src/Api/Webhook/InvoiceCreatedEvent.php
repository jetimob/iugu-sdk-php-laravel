<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Traits\Serializable;

class InvoiceCreatedEvent
{
    use Serializable;

    protected string $event;
    protected InvoiceCreatedData $data;

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getData(): InvoiceCreatedData
    {
        return $this->data;
    }
}
