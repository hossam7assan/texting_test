<?php

namespace App\Service;

use Carbon\Carbon;
use App\Models\Plan;
use App\Helper\StripeHelper;
use App\Models\Subscription;
use App\Enum\PaymentStatusEnum;

class SubscribeService
{
    public function __construct(private StripeHelper $stripeHelper)
    {
    }

    public function subscribe(Plan $plan)
    {
        $preparePlanData = $this->stripeHelper->createLineItem($plan->price, $plan->name);

        $this->stripeHelper->pay($preparePlanData);

        Subscription::create([
            'user_id' => auth()->id(),
            'plan_id' => $plan->id,
            'start_at' => now(),
            'end_at' => Carbon::now()->addMonths(1),
            'payment_id' => $this->stripeHelper->referenceId,
            'status' => false,
            'payment_status' => PaymentStatusEnum::pending,
        ]);

        return $this->stripeHelper->redirectUrl;
    }

    public function successPayment(string $sessionId): void
    {
        $this->stripeHelper->checkPayment($sessionId);

        $subscription = Subscription::where([
            'payment_id' => $sessionId,
            'status' => PaymentStatusEnum::pending
        ])->firstOrFail();

        Subscription::where('user_id', auth()->id())->update([
            'status' => false,
        ]);

        $subscription->update(
            [
                'status' => true,
                'payment_status' => PaymentStatusEnum::success,
            ]
        );
    }

    public function canceledPayment(string $sessionId): void
    {
        $this->stripeHelper->checkPayment($sessionId);

        $subscription = Subscription::where([
            'payment_id' => $sessionId,
            'payment_status' => PaymentStatusEnum::pending,
        ])->firstOrFail();

        $subscription->update(
            [
                'payment_status' => PaymentStatusEnum::cancel,
            ]
        );
    }
}
