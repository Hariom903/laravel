<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class StripePaymentController extends Controller
{
    //
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(): View
    {
        return view('stripe');
    }
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => 5000 * 100,
                //   'currency' => 'eur', // iDEAL supports only EUR
                //    'payment_method_types' => ['ideal'],
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "hello this is testing daat ", 
        ]);
                
        return back()
                ->with('success', 'Payment successful!');
    }
}
