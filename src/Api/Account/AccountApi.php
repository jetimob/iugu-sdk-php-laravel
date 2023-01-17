<?php

namespace Jetimob\Iugu\Api\Account;

use GuzzleHttp\RequestOptions;
use Jetimob\Iugu\Api\AbstractApi;

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
     * Esta API obriga a utilização do user_token na autenticação da chamada. Prazo de aprovação: um dia útil.
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
    public function requestVerification(string $id, $requestVerification): RequestVerificationResponse
    {
        return $this->mappedGet("accounts/$id/request_verification", RequestVerificationResponse::class, [
            RequestOptions::JSON => [
                'data' => $requestVerification
            ]
        ]);
    }

    public function info(string $id): InfoAccountResponse
    {
        return $this->mappedGet("/accounts/$id", InfoAccountResponse::class);
    }
}
