<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Dashboard (Inertia/Vue)
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return inertia('Dashboard');
        })->name('dashboard');
    });

    // Home route: redirect to login or dashboard
    Route::get('/', function () {
        return redirect()->route('login');
    });
});

// Auth routes (login, register, etc.) - must be outside the middleware group
require __DIR__.'/auth.php';