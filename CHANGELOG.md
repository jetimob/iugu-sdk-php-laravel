# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

## [2.7.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.6.0...v2.7.0) (2023-03-08)


### Features

* adiciona endpoint para ativar/desativar o pix ([5654cfa](https://github.com/jetimob/iugu-sdk-php-laravel/commit/5654cfa60087608cd8af2e98071e6f5011d47315))


### Bug Fixes

* corrige o método http utilizado para verificar uma subconta ([80704db](https://github.com/jetimob/iugu-sdk-php-laravel/commit/80704db1237d4f70d5797095ba221f26216460ff))

## [2.6.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.5.1...v2.6.0) (2023-03-06)


### Features

* implementa endpoint para buscar uma transferência ([3f45cd1](https://github.com/jetimob/iugu-sdk-php-laravel/commit/3f45cd19dbd9c1b6dd4cdfa71376f01d2ef09b41))


### Bug Fixes

* corrige propriedades opcionais do `FindInvoiceResponse` ([87174ea](https://github.com/jetimob/iugu-sdk-php-laravel/commit/87174ead36cfb6e41100400d380773938cc436ce))

### [2.5.1](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.5.0...v2.5.1) (2023-02-23)


### Bug Fixes

* adiciona propriedades faltantes em `FindInvoiceResponse` ([2cfacab](https://github.com/jetimob/iugu-sdk-php-laravel/commit/2cfacab3c79aad95526c27d9f0843a7ad61856ac))
* corrige nome da propriedade `per_day_interest_value` ([3978d99](https://github.com/jetimob/iugu-sdk-php-laravel/commit/3978d99c5cd49a6dc718ac530be113c6a6623c4e))

## [2.5.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.4.0...v2.5.0) (2023-02-14)


### Features

* adiciona payload do webhook de mudança de status da transferência ([ba83634](https://github.com/jetimob/iugu-sdk-php-laravel/commit/ba83634e20f36d1d628fc1a3ff55fd8fe82ad386))

## [2.4.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.3.0...v2.4.0) (2023-02-14)


### Features

* adiciona payload do webhook de fatura criada ([4cf0fab](https://github.com/jetimob/iugu-sdk-php-laravel/commit/4cf0fabb2dc1bc6e5bb53866592248bd88529694))


### Bug Fixes

* adiciona `per_days_interest_value` em Invoice ([f5ae93c](https://github.com/jetimob/iugu-sdk-php-laravel/commit/f5ae93ca075e2d2c274c8694e905ffb872187af9))
* adiciona getters e setters de `EarlyPaymentDiscount` ([ad8502d](https://github.com/jetimob/iugu-sdk-php-laravel/commit/ad8502da6a91324a1e14a93d07a44429b983219e))
* corrige propriedades do payload do webhook de mudança de status ([72feb6a](https://github.com/jetimob/iugu-sdk-php-laravel/commit/72feb6ae28ba5cf50bca495a23e18ad0846a0db8))

## [2.3.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.2.1...v2.3.0) (2023-02-03)


### Features

* adiciona endpoint para configurar conta ([e0ac4a0](https://github.com/jetimob/iugu-sdk-php-laravel/commit/e0ac4a0f525c4b02f5c3163769abbafe0487bc55))


### Bug Fixes

* corrige path do endpoint de informações da conta ([cc24c89](https://github.com/jetimob/iugu-sdk-php-laravel/commit/cc24c89cfb59e632b07a5572370b7fdadc15f654))

### [2.2.1](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.2.0...v2.2.1) (2023-01-30)

## [2.2.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.1.1...v2.2.0) (2023-01-25)


### Features

* adiciona AccountApi e TransferApi ([4333658](https://github.com/jetimob/iugu-sdk-php-laravel/commit/433365866c16df72e3e6ba95c68421abc7a5fbb5))
* adiciona assinatura RSA na requisição de transferência para terceiros ([d3b6aea](https://github.com/jetimob/iugu-sdk-php-laravel/commit/d3b6aea56c94e4ae99f81f4f5bafb5d6b3575d5d))
* adiciona endpoint de gatilhos e informações da conta ([a6bc333](https://github.com/jetimob/iugu-sdk-php-laravel/commit/a6bc3335b562875422c861381775364ac4f588a2))


### Bug Fixes

* remove valor mínimo no `$price_cents` de `InvoiceItem` ([725eae8](https://github.com/jetimob/iugu-sdk-php-laravel/commit/725eae800dbb00ef673769cb74dedf25ba9479c8))

### [2.1.1](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.1.0...v2.1.1) (2022-09-28)


### Bug Fixes

* corrige método para criar forma de pagamento ([ef43952](https://github.com/jetimob/iugu-sdk-php-laravel/commit/ef43952448f7780bfeb25001a10ab71f5e055332))
* remove nullable do campo `description` em `PaymentMethod` ([2e1c588](https://github.com/jetimob/iugu-sdk-php-laravel/commit/2e1c588fdc9092613f8efc3c34c942f0c309107c))

## [2.1.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.0.0...v2.1.0) (2022-09-22)


### Features

* adiciona endpoint de atualizar clientes ([82b6422](https://github.com/jetimob/iugu-sdk-php-laravel/commit/82b642288820dc8b2a71a7e0834b5117da8c0df3))
* adiciona endpoint de criar clientes ([7fa1318](https://github.com/jetimob/iugu-sdk-php-laravel/commit/7fa13186f875fb48151dc73ae32cda236f776e77))
* adiciona endpoint de criar e deletar método de pagamento ([6da3959](https://github.com/jetimob/iugu-sdk-php-laravel/commit/6da39598def5141c720cd1bd84bad1618ffe001d))
* adiciona endpoint de deletar clientes ([b10704e](https://github.com/jetimob/iugu-sdk-php-laravel/commit/b10704e2ce69178e838e2f6ed490fe801e849d97))


### Bug Fixes

* corrige a tipagem da propriedade `errors` ([9c0e2d2](https://github.com/jetimob/iugu-sdk-php-laravel/commit/9c0e2d21f72311c1573e28800a602ce23d97688b))

## [2.0.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v1.0.0...v2.0.0) (2022-08-23)


### ⚠ BREAKING CHANGES

* não suporta versões do PHP anteriores ao PHP 8

* atualizada dependências do projeto ([c8b646e](https://github.com/jetimob/iugu-sdk-php-laravel/commit/c8b646e9ea5e458fe7553de8c9c90e58a8c7f4e1))

## 1.0.0 (2022-06-23)


### Features

* adiciona api de faturas ([abcabb5](https://github.com/jetimob/iugu-sdk-php-laravel/commit/abcabb5c66cff325759faa1736879b5fb3343a7d))
* adiciona constantes com os valores possíveis de `status` e `payment_method` ([2106ca7](https://github.com/jetimob/iugu-sdk-php-laravel/commit/2106ca7b01d292cfdd2879e512d9d8bbcc1327f1))
* adiciona enum para as formas de pagamento ([9ea3ce4](https://github.com/jetimob/iugu-sdk-php-laravel/commit/9ea3ce4bd10fc39145b0932e090e19d05b18d38a))
* adiciona evento do webhook de invoice_status_changed ([0d37f40](https://github.com/jetimob/iugu-sdk-php-laravel/commit/0d37f40a1fa1cbeecc0b390ddba80557de0420b2))
* adiciona funcionalidade de cobrança direta ([5a4f3d8](https://github.com/jetimob/iugu-sdk-php-laravel/commit/5a4f3d822c694fa52482996fecce1f1e45a6bc4b))


### Bug Fixes

* adiciona getters para BankSlip ([4421405](https://github.com/jetimob/iugu-sdk-php-laravel/commit/4421405eb8b28b2783a7c9035f2aedc9862b6d82))
