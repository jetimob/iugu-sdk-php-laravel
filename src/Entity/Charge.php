<?php

namespace Jetimob\Iugu\Entity;

class Charge extends Entity
{
    /**
     * Apenas suporta "bank_slip", que é boleto bancário. Não é preenchido se enviar parâmetro token
     *
     * @var string|null $method
     */
    protected ?string $method;

    /**
     * ID do Token. Não é preenchido caso o método de pagamento seja "bank_slip". Em caso de Marketplace,
     * é possível enviar um token criado pela conta mestre.
     *
     * @var string|null $token
     */
    protected ?string $token;

    /**
     * ID da Forma de Pagamento do Cliente. Em caso de Marketplace, é possível enviar um "customer_payment_method_id"
     * de um Cliente criado pela conta mestre
     * Não é preenchido caso Método de Pagamento seja "bank_slip" ou utilize "token"
     *
     * @var string|null $customer_payment_method_id
     */
    protected ?string $customer_payment_method_id;

    /**
     * Se true, restringe o método de pagamento da cobrança para o definido em method, que no caso será apenas bank_slip.
     *
     * @var bool $restrict_payment_method
     */
    protected bool $restrict_payment_method;

    /** @var string $customer_id ID do Cliente. Utilizado para vincular a Fatura a um Cliente */
    protected string $customer_id;

    /** @var string $invoice_id ID da Fatura a ser utilizada para pagamento */
    protected string $invoice_id;

    /** @var string|null $email E-mail do Cliente (não é preenchido caso seja enviado um "invoice_id") */
    protected ?string $email;

    /**
     * Número de Parcelas (2 até 12), não é necessário passar 1.
     * Não é preenchido caso o método de pagamento seja "bank_slip".
     * O valor mínino de cada parcela é de R$5,00.
     *
     * @var int $months
     */
    protected int $months;

    /**
     * Valor de desconto, em centavos, aplicado sobre os itens criados em caso de não haver fatura vinculada à chamada.
     *
     * @var int $discount_cents
     */
    protected int $discount_cents;

    /**
     * Define o prazo em dias para o pagamento do boleto.
     * Caso não seja enviado, aplica-se o prazo padrão de 3 dias corridos.
     *
     * @var int $bank_slip_extra_days
     */
    protected int $bank_slip_extra_days;

    /**
     * Por padrão, a fatura é cancelada caso haja falha na cobrança, a não ser que este parâmetro seja enviado como "true".
     * Obs: Funcionalidade disponível apenas para faturas criadas no momento da cobrança.
     *
     * @var bool $keep_dunning
     */
    protected bool $keep_dunning;

    protected array $items;

    /**
     * Informações do cliente abaixo "payer" são obrigatórias para a emissão de boletos ou necessárias para seu sistema de antifraude.
     *
     * @var Payer $payer
     */
    protected Payer $payer;

    /**
     * Número único que identifica o pedido de compra. Opcional, ajuda a evitar o pagamento da mesma fatura.
     *
     * @var string|null $order_id
     */
    protected ?string $order_id;

    public function itemsItemType(): string
    {
        return InvoiceItem::class;
    }

    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param string|null $method
     *
     * @return Charge
     */
    public function setMethod(?string $method): Charge
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $token
     *
     * @return Charge
     */
    public function setToken(?string $token): Charge
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomerPaymentMethodId(): ?string
    {
        return $this->customer_payment_method_id;
    }

    /**
     * @param string|null $customer_payment_method_id
     *
     * @return Charge
     */
    public function setCustomerPaymentMethodId(?string $customer_payment_method_id): Charge
    {
        $this->customer_payment_method_id = $customer_payment_method_id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRestrictPaymentMethod(): bool
    {
        return $this->restrict_payment_method;
    }

    /**
     * @param bool $restrict_payment_method
     *
     * @return Charge
     */
    public function setRestrictPaymentMethod(bool $restrict_payment_method): Charge
    {
        $this->restrict_payment_method = $restrict_payment_method;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     *
     * @return Charge
     */
    public function setCustomerId(string $customer_id): Charge
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoice_id;
    }

    /**
     * @param string $invoice_id
     *
     * @return Charge
     */
    public function setInvoiceId(string $invoice_id): Charge
    {
        $this->invoice_id = $invoice_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return Charge
     */
    public function setEmail(?string $email): Charge
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonths(): int
    {
        return $this->months;
    }

    /**
     * @param int $months
     *
     * @return Charge
     */
    public function setMonths(int $months): Charge
    {
        $this->months = $months;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountCents(): int
    {
        return $this->discount_cents;
    }

    /**
     * @param int $discount_cents
     *
     * @return Charge
     */
    public function setDiscountCents(int $discount_cents): Charge
    {
        $this->discount_cents = $discount_cents;
        return $this;
    }

    /**
     * @return int
     */
    public function getBankSlipExtraDays(): int
    {
        return $this->bank_slip_extra_days;
    }

    /**
     * @param int $bank_slip_extra_days
     *
     * @return Charge
     */
    public function setBankSlipExtraDays(int $bank_slip_extra_days): Charge
    {
        $this->bank_slip_extra_days = $bank_slip_extra_days;
        return $this;
    }

    /**
     * @return bool
     */
    public function isKeepDunning(): bool
    {
        return $this->keep_dunning;
    }

    /**
     * @param bool $keep_dunning
     *
     * @return Charge
     */
    public function setKeepDunning(bool $keep_dunning): Charge
    {
        $this->keep_dunning = $keep_dunning;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     *
     * @return Charge
     */
    public function setItems(array $items): Charge
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return Payer
     */
    public function getPayer(): Payer
    {
        return $this->payer;
    }

    /**
     * @param Payer $payer
     *
     * @return Charge
     */
    public function setPayer(Payer $payer): Charge
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->order_id;
    }

    /**
     * @param string|null $order_id
     *
     * @return Charge
     */
    public function setOrderId(?string $order_id): Charge
    {
        $this->order_id = $order_id;
        return $this;
    }

    public static function new(string $invoiceId, string $token): self
    {
        return (new static())
            ->setInvoiceId($invoiceId)
            ->setToken($token);
    }
}