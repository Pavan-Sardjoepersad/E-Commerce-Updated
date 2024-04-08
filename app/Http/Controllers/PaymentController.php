<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller

{
    public function checkout(Request $request)
    {
        // Set your Stripe secret key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Get the necessary data from the request (e.g., amount, currency, token)
        $amount = 2000; // Example amount in cents (change as needed)
        $currency = 'usd';
        $token = $request->input('stripeToken');

        try {
            // Create a charge using the Stripe Charges API
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => $currency,
                'source' => $token,
            ]);

            // If the charge is successful, you can handle success logic here
            // You might want to update your database, send email notifications, etc.

            return redirect()->route('payment.success');
        } catch (\Stripe\Exception\CardException $e) {
            // If the charge fails, handle the exception (e.g., card is declined)
            return redirect()->route('payment.cancel')->with('error', $e->getError()->message);
        }
    }

    public function success()
    {
        // Handle success logic after a successful payment
        session()->forget('cart');
        return view('payment.success');
    }

    public function cancel()
    {
        // Handle cancellation logic when the user cancels the payment
        $error = session('error', null);

        return view('payment.cancel', compact('error'));
    }
}


