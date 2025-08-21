<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Stancl\Tenancy\Database\Models\Domain;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;

class TenantRegistrationController extends Controller
{
    public function showForm()
    {
        return view('central.register-company');
    }

    public function register(Request $request)
    {
        $request->validate([
            'company' => 'required|alpha_dash|unique:tenants,id',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create tenant and database
        $tenant = Tenant::create([
            'id' => $request->company,
            'data' => [
                'tenancy_db_name' => 'hub_' . $request->company,
            ],
        ]);
        Domain::create([
            'domain' => $request->company . '.localhost',
            'tenant_id' => $tenant->id,
        ]);

        // Create the first user in the tenant's database
        tenancy()->initialize($tenant);
        \App\Models\User::create([
            'name' => $request->company . ' Admin',
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        tenancy()->end();

        // return redirect('/')->with('success', 'Company registered! You can now log in at http://' . $request->company . '.localhost:8000');
        
        // === 3. Create Stripe customer & subscription ===
        Stripe::setApiKey(config('services.stripe.secret')); // use config/services.php

        $customer = Customer::create([
            'email' => $request->email,
            'name'  => $request->company . ' Admin',
        ]);

        $subscription = Subscription::create([
            'customer' => $customer->id,
            'items'    => [[
                'price' => config('services.stripe.basic_plan_id'),
            ]],
            'trial_period_days' => 10, // free trial for basic plan
        ]);

        // You might want to save subscription info in central DB
        $tenant->update([
            'data->stripe_customer_id'    => $customer->id,
            'data->stripe_subscription_id'=> $subscription->id,
        ]);

        // === 4. Redirect to tenant's subdomain ===
        $tenantUrl = "http://{$request->company}.localhost:8000"; // adapt for prod
        return redirect($tenantUrl)->with('success', 'Company registered! Your subscription has started with a 10-day trial.');
    }
}