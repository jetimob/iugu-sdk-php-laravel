<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Transfer\TransferApi;
use Jetimob\Iugu\Entity\Bank;
use Jetimob\Iugu\Entity\Receiver;
use Jetimob\Iugu\Entity\Transfer;
use Jetimob\Iugu\Entity\TransferType;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class TransferApiTest extends AbstractTestCase
{
    protected TransferApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::transfer();
    }

    /** @test */
    public function transferApiShouldExists(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(TransferApi::class, $this->api);
    }

    /** @test */
    public function requestTransferShouldSuccess(): void
    {
        $transfer = new Transfer();
        $transfer->setTransferType(TransferType::TED)
            ->setAmountCents(290)
            ->setTestMode(true)
            ->setReceiver(
                (new Receiver())
                    ->setName('')
                    ->setCpfCnpj('')
                    ->setBank(
                        (new Bank())
                            ->setCompe('')
                            ->setBranch('')
                            ->setAccount('')
                    )
            );

        // No momento está disponível apenas para o ambiente de produção
        $this->api->requestTransfer($transfer);
    }
}