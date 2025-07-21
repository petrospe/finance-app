<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Central\TenantRegistrationController;

Route::get('/register-company', [TenantRegistrationController::class, 'showForm']);
Route::post('/register-company', [TenantRegistrationController::class, 'register']);

Route::get('/', function () {
    return inertia('Welcome', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// routes/web.php, api.php or any other central route files you have

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
    });
}
require __DIR__.'/auth.php';
