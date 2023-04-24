<?php

namespace Jetimob\Iugu\Api\Account;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;
use Jetimob\Iugu\Entity\AccountConfiguration;
use Jetimob\Iugu\Entity\VerificationData;

class AccountApi extends AbstractApi
{
    /**
     * Permite a criação de subcontas (contas de pagamento) para contas com permissão de Marketplace
     * ou parceiro de negócios.
     *
     * @link https://dev.iugu.com/reference/criar-subconta
     * @param string $name Nome da subconta. Se não enviado, o ID da conta é utilizado por padrão.
     * @return CreateAccountResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function create(string $name): CreateAccountResponse
    {
        return $this->mappedPost('marketplace/create_account', CreateAccountResponse::class, [
            RequestOptions::JSON => [
                'name' => $name,
            ],
        ]);
    }

    /**
     * Esta API obriga a utilização do **user_token** na autenticação da chamada. Prazo de aprovação: um dia útil.
     *
     * No envio da verificação, é solicitado escolher entre conta PF ou PJ ("data.person_type").
     *
     * Se person_type == "Pessoa Física", é OBRIGATÓRIO informar números válidos de CPF e de conta bancária PF vinculada
     * ao CPF cadastrado.
     *
     * Se person_type == "Pessoa Jurídica", é OBRIGATÓRIO informar números válidos de CNPJ válido e de conta bancária PJ
     * vinculada ao CNPJ cadastrado.
     *
     * Como toda chamada deste endpoint, por padrão a iugu valida o dígito verificador das informações bancárias
     * enviadas.
     *
     * @link https://dev.iugu.com/reference/enviar-verificacao-de-conta
     */
    public function requestVerification(
        string $id,
        VerificationData $requestVerification,
        string $userToken
    ): RequestVerificationResponse {
        $this->usingToken($userToken);

        return $this->mappedPost("accounts/$id/request_verification", RequestVerificationResponse::class, [
            RequestOptions::JSON => [
                'data' => $requestVerification
            ]
        ]);
    }

    /**
     * Configura parâmetros de uma conta de pagamentos.
     *
     * Para configurar uma subconta, utilize o **live_token da subconta**
     *
     * @link https://dev.iugu.com/reference/configurar-conta
     */
    public function configure(AccountConfiguration $configuration): ConfigureAccountResponse
    {
        return $this->mappedPost('accounts/configuration', ConfigureAccountResponse::class, [
            RequestOptions::JSON => $configuration,
        ]);
    }

    /**
     * Retorna as informações de uma conta. Use o LIVE_API_TOKEN da sub-conta na autenticação.
     *
     * @link https://dev.iugu.com/reference/informacoes-da-conta
     */
    public function info(string $id): InfoAccountResponse
    {
        return $this->mappedGet("accounts/$id", InfoAccountResponse::class);
    }

    public function configurePix(bool $enabled): ConfigurePixResponse
    {
        return $this->mappedPut('payments/pix', ConfigurePixResponse::class, [
            RequestOptions::JSON => [
                'enabled' => $enabled
            ]
        ]);
    }
}
