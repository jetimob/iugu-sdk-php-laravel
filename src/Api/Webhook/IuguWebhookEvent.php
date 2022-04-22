<?php

namespace Jetimob\Iugu\Api\Webhook;

enum IuguWebhookEvent: string
{
    CASE ALL = 'all';
    CASE CUSTOMER_PAYMENT_METHOD_NEW = 'customer_payment_method.new';
    CASE INVOICE_CREATED = 'invoice.created';
    CASE INVOICE_STATUS_CHANGED = 'invoice.status_changed';
    CASE INVOICE_REFUND = 'invoice.refund';
    CASE INVOICE_PAYMENT_FAILED = 'invoice.payment_failed';
    CASE INVOICE_DUNNING_ACTION = 'invoice.dunning_action';
    CASE INVOICE_DUE = 'invoice.due';
    CASE INVOICE_INSTALLMENT_RELEASED = 'invoice.installment_released';
    CASE INVOICE_RELEASED = 'invoice.released';
    CASE SUBSCRIPTION_SUSPENDED = 'subscription.suspended';
    CASE SUBSCRIPTION_ACTIVATED = 'subscription.activated';
    CASE SUBSCRIPTION_CREATED = 'subscription.created';
    CASE SUBSCRIPTION_RENEWED = 'subscription.renewed';
    CASE SUBSCRIPTION_EXPIRED = 'subscription.expired';
    CASE SUBSCRIPTION_CHANGED = 'subscription.changed';
    CASE REFERRALS_VERIFICATION = 'referrals.verification';
    CASE REFERRALS_BANK_VERIFICATION = 'referrals.bank_verification';
    CASE WITHDRAW_REQUEST_CREATED = 'withdraw_request.created';
    CASE WITHDRAW_REQUEST_STATUS_CHANGED = 'withdraw_request.status_changed';
    CASE DEPOSIT_ACCEPTED = 'deposit.accepted';
    CASE DEPOSIT_REJECTED = 'deposit.rejected';
    CASE TRANSFER_REQUEST_STATUS_CHANGED = 'transfer_request.status_changed';
}
