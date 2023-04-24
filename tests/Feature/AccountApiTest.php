<?php

namespace Jetimob\Iugu\Tests\Feature;

use Jetimob\Iugu\Api\Account\AccountApi;
use Jetimob\Iugu\Entity\AccountConfiguration;
use Jetimob\Iugu\Entity\ConfigurationCreditCard;
use Jetimob\Iugu\Entity\Split;
use Jetimob\Iugu\Facades\Iugu;
use Jetimob\Iugu\Tests\AbstractTestCase;

class AccountApiTest extends AbstractTestCase
{
    protected AccountApi $api;
    protected string $subAccountId = '';
    protected string $subAccountLiveToken = '';

    public function setUp(): void
    {
        parent::setUp();
        $this->api = Iugu::account();
    }

    /** @test */
    public function accountApiShouldExists(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(AccountApi::class, $this->api);
    }

    /** @test */
    public function getAccountInfoShouldSuccess(): void
    {
        $res = $this->api->usingToken($this->subAccountLiveToken)->info($this->subAccountId);

        $this->assertSame(200, $res->getStatusCode());
        $this->assertSame($this->subAccountId, $res->getId());
    }

    /**
     * @test
     */
    public function configureAccountShouldSuccess(): void
    {
        $this->markTestIncomplete('Endpoint disponível somente em produção');

        $configuration = (new AccountConfiguration())
            ->setCreditCard(ConfigurationCreditCard::new(false))
            ->setSplits([
                Split::new(
                    290,
                    '',
                )
            ]);

        $res = $this->api->usingToken('')->configure($configuration);

        $this->assertSame(200, $res->getStatusCode());
    }

    /**
     * @test
     */
    public function configurePixShouldSuccess(): void
    {
        $this->markTestIncomplete('Endpoint disponível somente em produção');

        $res = $this->api->usingToken('')
            ->configurePix(true);

        $this->assertSame(200, $res->getStatusCode());
    }
}
