<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
class StripeController extends Controller
{
    public function handlePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                // "amount" => 28900.00,
                "amount" => 200.00,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "" 
        ]);
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }

}
