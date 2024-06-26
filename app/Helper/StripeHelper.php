<?php

namespace App\Helper;

use Exception;
use Stripe\StripeClient;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StripeHelper
{
    public string $referenceId;
    public string $redirectUrl;

    private StripeClient $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('stripe.secret_key'));
    }

    public function pay(array $items): void
    {
        $checkout = $this->stripe->checkout->sessions->create([
            'line_items' => [$items],
            'mode' => 'payment',
            'success_url' => route('subscribe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('subscribe.cancel') . '?session_id={CHECKOUT_SESSION_ID}',
        ]);

        $this->referenceId =  $checkout->id;
        $this->redirectUrl =  $checkout->url;

        return;
    }

    public function checkPayment($sessionId)
    {
        try {
            $this->stripe->checkout->sessions->retrieve($sessionId);
        } catch (Exception $e) {
            throw new NotFoundHttpException();
        }
    }

    public function createLineItem($price, $productName, $quantity = 1): array
    {
        return [
            'price_data' => [
                'currency' => config('stripe.currency'),
                'product_data' => [
                    'name' => $productName,
                ],
                'unit_amount' => $price * 100,
            ],
            'quantity' => $quantity,
        ];
    }
}
