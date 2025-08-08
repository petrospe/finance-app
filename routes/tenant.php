<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use App\Http\Controllers\ProfileController;

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
    // InitializeTenancyBySubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::get('/tenant-test', function () {
        return 'Tenant ID: ' . tenant('id');
    });

    // Auth routes (login, register, etc.) - must be outside the middleware group
    require __DIR__.'/auth.php';

    // Dashboard (Inertia/Vue)
    Route::middleware(['auth'])->group(function () {
        Route::get('/csrf-token', function () {
            return response()->json(['csrf_token' => csrf_token()]);
        });
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard', function () {
            return inertia('Dashboard');
        })->name('dashboard');

        Route::get('/dashboard/balance', [\App\Http\Controllers\DashboardController::class, 'balance']);

        // Route::get('/expenses', function () {
        //     return inertia('Expenses');
        // })->name('expenses');

        // Route::get('/incomes', function () {
        //     return inertia('Incomes');
        // })->name('incomes');

        Route::get('/incomes', [\App\Http\Controllers\IncomeController::class, 'index'])->name('incomes');
        Route::post('/incomes', [\App\Http\Controllers\IncomeController::class, 'store'])->name('incomes.store');
        Route::post('/incomes/{income}', [\App\Http\Controllers\IncomeController::class, 'update'])->name('incomes.update');
        Route::delete('/incomes/{income}', [\App\Http\Controllers\IncomeController::class, 'destroy'])->name('incomes.destroy');

        Route::get('/expenses', [\App\Http\Controllers\ExpenseController::class, 'index'])->name('expenses');
        Route::post('/expenses', [\App\Http\Controllers\ExpenseController::class, 'store'])->name('expenses.store');
        Route::post('/expenses/{expense}', [\App\Http\Controllers\ExpenseController::class, 'update'])->name('expenses.update');
        Route::delete('/expenses/{expense}', [\App\Http\Controllers\ExpenseController::class, 'destroy'])->name('expenses.destroy');

    });

    // Home route: redirect to login or dashboard
    Route::get('/', function () {
        return redirect()->route('login');
    });
});

