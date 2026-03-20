<?php

namespace Jetimob\Iugu\Tests\Feature;

use Carbon\Carbon;
use Jetimob\Iugu\Api\Invoice\FindInvoiceResponse;
use Jetimob\Iugu\Api\Invoice\InvoiceApi;
use Jetimob\Iugu\Entity\Address;
use Jetimob\Iugu\Entity\Invoice;
use Jetimob\Iugu\Entity\InvoiceItem;
use Jetimob\Iugu\Entity\Payer;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class InvoiceApiTest extends AbstractTestCase
{
    protected InvoiceApi $api;
    protected Invoice $invoice;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::invoice();
    }

    /** @test */
    public function invoiceApiShouldExists(): void
    {
        
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(InvoiceApi::class, $this->api);
    }
    
    /** @test */
    public function createInvoiceShouldSucceed(): string
    {
        $invoice = $this->createGenericInvoice();
        $res = $this->api->create($invoice);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($invoice->getItems()[0]->getPriceCents(), (int) $res->getTotalCents());

        return $res->getId();
    }

    /** @test */
    public function createInvoiceForSubAccountShouldSucceed(): void
    {
        $invoice = $this->createGenericInvoice();
        $res = $this->api
            ->usingToken('')
            ->create($invoice);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($invoice->getItems()[0]->getPriceCents(), (int) $res->getTotalCents());

        print($res->getSecureUrl());
    }

    /** 
     * @test 
     * @depends createInvoiceShouldSucceed
     * */
    public function findInvoiceShouldSucceed($invoiceId): string
    {
        $res = $this->api->find($invoiceId);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($invoiceId, $res->getId());

        return $invoiceId;
    }

    /** 
     * @test 
     * @depends createInvoiceShouldSucceed
     * */
    public function cancelInvoiceShouldSucceed($invoiceId): void
    {
        $res = $this->api->cancel($invoiceId);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($invoiceId, $res->getId());
    }

    /** @test */
    public function findInvoiceResponseShouldHydrateNewFields(): void
    {
        $payload = json_encode([
            'early_payment_discounts' => [
                ['days' => 10, 'value_cents' => 500],
                ['days' => 5,  'value_cents' => 200],
            ],
            'split_rules' => [
                ['recipient_account_id' => 'abc123', 'cents' => 1000],
            ],
            'per_day_interest_cents' => 150,
            'bank_slip_extra_due'    => 3,
            'overpaid_cents'         => 0,
            'order_id'               => 'ORD-001',
            'subscription_id'        => 'SUB-999',
        ]);

        $response = FindInvoiceResponse::deserialize($payload);

        $this->assertCount(2, $response->getEarlyPaymentDiscounts());
        $this->assertSame(10, $response->getEarlyPaymentDiscounts()[0]['days']);

        $this->assertIsArray($response->getSplitRules());
        $this->assertCount(1, $response->getSplitRules());
        $this->assertSame('abc123', $response->getSplitRules()[0]['recipient_account_id']);

        $this->assertSame(150, $response->getPerDayInterestCents());
        $this->assertSame(3,   $response->getBankSlipExtraDue());
        $this->assertSame(0,   $response->getOverpaidCents());
        $this->assertSame('ORD-001', $response->getOrderId());
        $this->assertSame('SUB-999', $response->getSubscriptionId());
    }

    protected function createGenericInvoice(): Invoice
    {
        $itemCents = 200;

        $dueDate = Carbon::now()->addDays(20)->format('Y-m-d');
        $items = [InvoiceItem::new('test item', $itemCents, 1)];

        $address = Address::new('97015030', 'Rua Appel', '347', 'Santa Maria', 'RS', 'Brasil');
        $payer = Payer::new('Jetimob', '12544265000130', $address);

        $invoice = Invoice::new('contato@jetimob.com', $dueDate, $items, $payer);

        return $invoice;
    }
}
