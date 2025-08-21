<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\BillingPortal\Session;

class SubscriptionController extends Controller
{
    public function managePortal(Request $request)
    {
        $user = $request->user();

        // Make sure tenant exists and has Stripe customer ID
        $tenant = tenant();
        if (!$tenant || !$tenant->stripe_customer_id) {
            return redirect()->back()->with('error', 'No Stripe customer found.');
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a Stripe Portal session
        $session = Session::create([
            'customer' => $tenant->stripe_customer_id,
            'return_url' => url('/dashboard'), // redirect after managing subscription
        ]);

        // Redirect user to Stripe hosted URL
        return redirect($session->url);
    }
}
