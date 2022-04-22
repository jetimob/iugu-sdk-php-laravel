<?php

namespace Jetimob\Iugu\Api\Invoice;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\Invoice;

class InvoiceApi extends AbstractApi
{
    /**
     * Cria uma fatura para um cliente
     *
     * @link https://dev.iugu.com/reference/criar-fatura
     */
    public function create(Invoice $invoice): CreateInvoiceResponse
    {
        return $this->mappedPost('invoices', CreateInvoiceResponse::class, [
            RequestOptions::JSON => $invoice,
        ]);
    }

    public function find(string $id): FindInvoiceResponse
    {
        return $this->mappedGet("invoices/$id", FindInvoiceResponse::class);
    }

    /**
     *
     * @param string $id ID da fatura
     *
     * @throws \Throwable
     * @throws \JsonException
     */
    public function cancel(string $id): CancelInvoiceResponse
    {
        return $this->mappedPut("invoices/$id/cancel", CancelInvoiceResponse::class);
    }
}
