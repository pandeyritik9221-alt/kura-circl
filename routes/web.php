<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Home page showing the form
Route::get('/', [TestController::class, 'index']);

// Handle form submission
Route::post('/test-submit', [TestController::class, 'store'])->name('test.submit');