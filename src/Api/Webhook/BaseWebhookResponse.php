<?php

namespace Jetimob\Iugu\Api\Webhook;

use Jetimob\Http\Response;

abstract class BaseWebhookResponse extends Response
{
    /**
     * Nome do evento desejado. Acesse a lista com todos os eventos e descrição no link a seguir.
     * @link https://dev.iugu.com/docs/gatilhos
     *
     * @var string $id
     */
    protected string $id;
    /** @var string $url Endpoint para qual o gatilho será enviado */
    protected string $url;

    /**
     * Grave uma chave / key para usar como "Basic Authentication" na validação do recebimento dos gatilhos.
     *
     * @var string|null $authorization
     */
    protected ?string $authorization;
    protected string $event;

    public function getId(): string
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    public function getEvent(): string
    {
        return $this->event;
    }
}
