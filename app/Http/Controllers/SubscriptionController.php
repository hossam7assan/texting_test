<?php

namespace App\Http\Controllers;

use App\Helper\StripeHelper;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Plan $plan, StripeHelper $stripeHelper)
    {
        $stripeHelper->pay($stripeHelper->createLineItems($plan->price, $plan->name));
        Subs
        return redirect()->to($stripeHelper->redirectUrl);    }
}
