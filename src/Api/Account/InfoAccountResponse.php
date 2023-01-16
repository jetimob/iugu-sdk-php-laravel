<?php

namespace Jetimob\Iugu\Api\Account;

use Jetimob\Http\Response;

class InfoAccountResponse extends Response
{
    protected string $id;
    protected string $name;
    protected string $created_at;
    protected string $updated_at;
    protected ?bool $can_receive = false;
    protected ?bool $is_verified = false;
    protected string $last_verification_request_status;
    protected ?string $last_verification_request_feedback = null;
    protected int $change_plan_type;
    protected int $subscriptions_trial_period;
    protected bool $disable_emails;
    protected ?string $last_withdraw;
    protected int $total_subscriptions;
    protected ?string $reply_to;
    protected bool $webapp_on_test_mode;
    protected bool $marketplace;
    protected bool $auto_withdraw;
    protected string $balance;
    protected string $balance_available_for_withdraw;
    protected string $balance_in_protest;
    protected string $protected_balance;
    protected string $payable_balance;
    protected string $receivable_balance;
    protected string $commission_balance;
    protected string $volume_last_month;
    protected string $volume_this_month;
    protected string $taxes_paid_last_month;
    protected string $taxes_paid_this_month;
    protected ?string $custom_logo_url;
    protected ?string $custom_logo_small_url;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function getCanReceive(): ?bool
    {
        return $this->can_receive;
    }

    public function getIsVerified(): ?bool
    {
        return $this->is_verified;
    }

    public function getLastVerificationRequestStatus(): string
    {
        return $this->last_verification_request_status;
    }

    public function getLastVerificationRequestFeedback(): ?string
    {
        return $this->last_verification_request_feedback;
    }

    public function getChangePlanType(): int
    {
        return $this->change_plan_type;
    }

    public function getSubscriptionsTrialPeriod(): int
    {
        return $this->subscriptions_trial_period;
    }

    public function isDisableEmails(): bool
    {
        return $this->disable_emails;
    }

    public function getLastWithdraw(): ?string
    {
        return $this->last_withdraw;
    }

    public function getTotalSubscriptions(): int
    {
        return $this->total_subscriptions;
    }

    public function getReplyTo(): ?string
    {
        return $this->reply_to;
    }

    public function isWebappOnTestMode(): bool
    {
        return $this->webapp_on_test_mode;
    }

    public function isMarketplace(): bool
    {
        return $this->marketplace;
    }

    public function isAutoWithdraw(): bool
    {
        return $this->auto_withdraw;
    }

    public function getBalance(): string
    {
        return $this->balance;
    }

    public function getBalanceAvailableForWithdraw(): string
    {
        return $this->balance_available_for_withdraw;
    }

    public function getBalanceInProtest(): string
    {
        return $this->balance_in_protest;
    }

    public function getProtectedBalance(): string
    {
        return $this->protected_balance;
    }

    public function getPayableBalance(): string
    {
        return $this->payable_balance;
    }

    public function getReceivableBalance(): string
    {
        return $this->receivable_balance;
    }

    public function getCommissionBalance(): string
    {
        return $this->commission_balance;
    }

    public function getVolumeLastMonth(): string
    {
        return $this->volume_last_month;
    }

    public function getVolumeThisMonth(): string
    {
        return $this->volume_this_month;
    }

    public function getTaxesPaidLastMonth(): string
    {
        return $this->taxes_paid_last_month;
    }

    public function getTaxesPaidThisMonth(): string
    {
        return $this->taxes_paid_this_month;
    }

    public function getCustomLogoUrl(): ?string
    {
        return $this->custom_logo_url;
    }

    public function getCustomLogoSmallUrl(): ?string
    {
        return $this->custom_logo_small_url;
    }
}
