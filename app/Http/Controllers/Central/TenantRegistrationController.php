<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Stancl\Tenancy\Database\Models\Domain;

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

        return redirect('/')->with('success', 'Company registered! You can now log in at http://' . $request->company . '.localhost:8000');
    }
}