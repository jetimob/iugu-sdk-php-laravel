<?php

namespace Jetimob\Iugu\Tests\Feature;

use Carbon\Carbon;
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
    public function createInvoiceShouldSucceed(): void
    {
        $itemCents = 200;

        $dueDate = Carbon::now()->addDays(20)->format('Y-m-d');
        $items = [InvoiceItem::new('test item', $itemCents, 1)];

        $address = Address::new('97015030', 'Rua Appel', '347', 'Santa Maria', 'RS', 'Brasil');
        $payer = Payer::new('Jetimob', '12544265000130', $address);

        $invoice = Invoice::new('contato@jetimob.com', $dueDate, $items, $payer);

        $res = $this->api->create($invoice);
        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($itemCents, (int) $res->getTotalCents());
    }

    /** @test */
    public function findInvoiceShouldSucceed(): void
    {
        $invoiceId = '499D6F9200734C3BA227F74AA306858A';

        $res = $this->api->find($invoiceId);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($invoiceId, $res->getId());
    }

    /** @test */
    public function cancelInvoiceShouldSucceed(): void
    {
        $invoiceId = '499D6F9200734C3BA227F74AA306858A';

        $res = $this->api->cancel($invoiceId);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($invoiceId, $res->getId());
    }
}
