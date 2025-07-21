<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/{any}', function () {
    return file_get_contents(public_path('index.html'));
})->where('any', '.*');

require __DIR__.'/auth.php';
