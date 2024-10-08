# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

### [2.12.1](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.12.0...v2.12.1) (2024-10-01)


### Bug Fixes

* corrige valor nullable nos atributos secure_url e secure_id de invoiceResponse ([89c59e0](https://github.com/jetimob/iugu-sdk-php-laravel/commit/89c59e0db3600a1cc90dc7c2d337c6b0ff2ef07c))

## [2.12.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.11.0...v2.12.0) (2024-09-25)


### Features

* implementa dados de bank_slip ([3e9675c](https://github.com/jetimob/iugu-sdk-php-laravel/commit/3e9675c449ea1974f152dd6177626d0cbbb3b656))

## [2.11.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.10.1...v2.11.0) (2024-01-30)


### Features

* set BankSlip properties as nullable ([9a89387](https://github.com/jetimob/iugu-sdk-php-laravel/commit/9a8938756ab3c904d8b84451f57a099c735a1be0))

### [2.10.1](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.10.0...v2.10.1) (2023-11-01)

## [2.10.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.8...v2.10.0) (2023-06-20)


### Features

* implementa campo "bank_branch_digit" na entidade "Bank" ([7b591b3](https://github.com/jetimob/iugu-sdk-php-laravel/commit/7b591b30f711dde60f67c69a5b692497b49362eb))

### [2.9.8](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.7...v2.9.8) (2023-05-29)


### Bug Fixes

* adiciona "phone" na entidade PixType ([0562614](https://github.com/jetimob/iugu-sdk-php-laravel/commit/05626144805559e2c1fb2f317b3e8110854015b6))

### [2.9.7](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.6...v2.9.7) (2023-05-04)


### Bug Fixes

* permite null nos atributos da antidade CreditCardTransaction ([3f5a308](https://github.com/jetimob/iugu-sdk-php-laravel/commit/3f5a3088ca192c5bdf7754fe1950c0a1dd1d5af0))
* troca last_verification_request_status para nullable ([b3639f4](https://github.com/jetimob/iugu-sdk-php-laravel/commit/b3639f4e899ad828ee8859f8267dc5d294b19903))

### [2.9.6](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.5...v2.9.6) (2023-05-03)


### Bug Fixes

* aceita default_return_url como null ([52a8a44](https://github.com/jetimob/iugu-sdk-php-laravel/commit/52a8a44405536d22bdddcbe411c7deb0da043f0b))

### [2.9.5](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.4...v2.9.5) (2023-05-03)


### Bug Fixes

* corrige erro ao acessar variável não inicializada em InvoiceStatusChangedEvent.php ([df362f5](https://github.com/jetimob/iugu-sdk-php-laravel/commit/df362f529a1763e049f2cfa3351f296a2c136b78))

### [2.9.4](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.3...v2.9.4) (2023-04-24)


### Bug Fixes

* corrige método da requisição de configuração de subconta e splits ([6e4030e](https://github.com/jetimob/iugu-sdk-php-laravel/commit/6e4030e65a61ea8162a2fa5ac1b391844018ebc9))

### [2.9.3](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.2...v2.9.3) (2023-04-24)


### Bug Fixes

* define statement como nullable ([e6a6953](https://github.com/jetimob/iugu-sdk-php-laravel/commit/e6a69536ca501a7057c1f66d4f595139efdb3846))

### [2.9.2](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.1...v2.9.2) (2023-03-29)


### Bug Fixes

* seta null para as variáveis que podem vir nulas pelo webhook de mudança de status de uma fatura ([534c7bf](https://github.com/jetimob/iugu-sdk-php-laravel/commit/534c7bf6b752d5799e4757c92984f05f9eb9811c))

### [2.9.1](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.9.0...v2.9.1) (2023-03-23)


### Bug Fixes

* corrige tipagem esperada das variáveis $sender e $receiver para string ([dd0d447](https://github.com/jetimob/iugu-sdk-php-laravel/commit/dd0d4471421c2978e976e9c15cdc30a9601ce5a5))

## [2.9.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.8.0...v2.9.0) (2023-03-23)


### Features

* adiciona webhook de mudança de status da transferência externa ([906b4f7](https://github.com/jetimob/iugu-sdk-php-laravel/commit/906b4f784cf1d0e69e052ef72039084be820be6b))

## [2.8.0](https://github.com/jetimob/iugu-sdk-php-laravel/compare/v2.7.0...v2.8.0) (2023-03-21)


### Features

* implementa apitoken sem codificação em base 64 para validação da assinatura ([7e37ec2](https://github.com/jetimob/iugu-sdk-php-laravel/commit/7e37ec26e931f912423da7c2bb5d0325295fc379))
* recebe api_token pelo como parãmetro para validação ([6a924dc](https://github.com/jetimob/iugu-sdk-php-laravel/commit/6a924dcf8abc0b57441088186ee75f29377d7840))

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
