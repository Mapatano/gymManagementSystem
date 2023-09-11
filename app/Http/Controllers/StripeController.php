<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Checkout\Session as StripeSession;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function payment(Request $request)
    {
        $amount = $request->input('amount');
        $currency = 'usd';

        Stripe::setApiKey(config('stripe.secret'));

        $checkout_session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'name' => 'Membership Payment',
                'description' => 'Membership Payment',
                'amount' => $amount * 100,
                'currency' => $currency,
                'quantity' => 1,
            ]],
            'success_url' => url('/payment/success'),
            'cancel_url' => url('/payment/cancel'),
        ]);

        Session::put('stripe_checkout_session_id', $checkout_session->id);

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        $checkout_session_id = Session::get('stripe_checkout_session_id');
        Stripe::setApiKey(config('stripe.secret'));
        $checkout_session = StripeSession::retrieve($checkout_session_id);

        return response()->json([
            'success' => true,
            'message' => 'Payment successful',
        ]);
    }

    public function cancel(Request $request)
    {
        return response()->json([
            'success' => false,
            'message' => 'Payment cancelled',
        ]);
    }
} */

