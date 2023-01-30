# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

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
