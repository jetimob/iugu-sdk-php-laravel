# iugu-sdk-php-laravel
iugu-sdk-php-laravel foi criado e é mantido pela equipe [Jetimob](https://github.com/jetimob). É um SDK utilizado para
interagir com a API da [Iugu](https://www.iugu.com/) de forma simples e direta.

---
## Instalação
Instale o pacote utilizando o [composer](https://getcomposer.org/)
```shell
composer require jetimob/iugu-sdk-php-laravel
```

---
## Configuração
Para começar, as configurações do pacote devem ser publicadas através do comando:

````shell
php artisan iugu:install
````

Este comando irá criar o arquivo de configuração `iugu.php` no diretório `config` para que você possa modificar conforme
a necessidade do seu projeto.

---
## Autenticação

[//]: # (Explicar o processo da injeção do bearer token pelo AbstractApi)

### Assinatura de Requisições (RSA)
Alguns endpoints da Iugu necessitam de um nível a mais de autenticação, como por exemplo a [transferência para terceiros](./src/Api/Transfer/TransferApi.php).
A complexidade da autenticação foi abstraida pelo método `withSignature` em [AbstractApi](./src/Api/AbstractApi.php), sendo necessário para somente informar a chave privada
nas configurações, em `private_key`. 

Para mais informações sobre [como gerar uma chave API com assinatura](https://dev.iugu.com/reference/autentica%C3%A7%C3%A3o#criando-chave-api-com-assinatura) e demais informações acesse o [guia da Iugu](https://dev.iugu.com/reference/autentica%C3%A7%C3%A3o#assinatura-de-requisi%C3%A7%C3%B5es-rsa)

---
## Uso

Sempre que for chamar qualquer api do pacote **iugu-sdk-php-laravel**, utilize o namespace `Jetimob\Iugu\Facades\Iugu`
ou, simplesmente, `Iugu`. O namespace `Iugu` é registrado automaticamente pelo **Laravel**, ou seja, a importação pode
ser feita apenas com `use Iugu;` no topo de um arquivo.

---

## Exemplos

asdsa
