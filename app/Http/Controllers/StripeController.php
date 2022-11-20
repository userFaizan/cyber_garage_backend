<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use Notification;
use App\Models\User;
use App\Notifications\AlertNotification;
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
  
        $user = User::first();
        $project = [
            'greeting' => 'Good Day '.$user->name.',',
            'body' => 'Cyber Garage has a new subscriber, and the payment has been processed and complete! Check
                        the admin panel for customer company details.',
        ];
        Notification::send($user, new AlertNotification($project));
        Session::flash('success', 'Payment has been successfully processed.');

        return back();
    }

}
