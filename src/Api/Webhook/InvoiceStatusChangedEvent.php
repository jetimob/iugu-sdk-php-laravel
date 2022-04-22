<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Traits\Serializable;

class InvoiceStatusChangedEvent
{
    use Serializable;

    protected string $event;
    protected InvoiceStatusChangedData $data;

    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @return InvoiceStatusChangedData
     */
    public function getData(): InvoiceStatusChangedData
    {
        return $this->data;
    }
}
