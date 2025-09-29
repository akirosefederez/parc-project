<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

class PaymentController extends Controller
{
    public function donate(Request $request)
    {
        // Validate request
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_method_id' => 'required|string',
            'email' => 'required|email'
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create PaymentIntent
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $request->amount * 100, // in cents
                'currency' => 'usd',
                'payment_method' => $request->payment_method_id,
                'confirmation_method' => 'manual',
                'confirm' => true,
                'receipt_email' => $request->email,
            ]);

            return response()->json(['success' => true, 'client_secret' => $paymentIntent->client_secret]);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
