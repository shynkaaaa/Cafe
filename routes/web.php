<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrderController::class, 'getMenu']);
Route::get('/product/{product_id}', [OrderController::class, 'getProductInfo']);
Route::post('/done', [OrderController::class, 'createOrder']);
