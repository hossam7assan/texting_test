<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Service\SubscribeService;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SubscriptionController extends Controller
{
    public function subscribe(Plan $plan, SubscribeService $subscribeService)
    {
        $redirectUrl = $subscribeService->subscribe($plan);

        return redirect()->to($redirectUrl);
    }


    public function success(Request $request, SubscribeService $subscribeService)
    {
        if (!$request->has('session_id')) {
            throw new NotFoundHttpException();
        }

        $subscribeService->successPayment($request->session_id);

        Alert::success("We have received a successful payment, thank you.");
        return redirect()->route('home');
    }

    public function cancel(Request $request, SubscribeService $subscribeService)
    {
        if (!$request->has('session_id')) {
            throw new NotFoundHttpException();
        }

        $subscribeService->canceledPayment($request->session_id);

        Alert::error("Payment not successful, please try again.");
        return redirect()->route('home');
    }
}
