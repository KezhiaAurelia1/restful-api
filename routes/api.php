<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::apiResource('customers', CustomerController::class);
Route::apiResource('orders', OrderController::class);
