<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', App\Http\Controllers\CategoryController::class)->names('categories');
Route::resource('clients', App\Http\Controllers\ClientController::class)->names('clients');
Route::resource('products', App\Http\Controllers\ProductController::class)->names('products');
Route::resource('providers', App\Http\Controllers\ProviderController::class)->names('providers');
Route::resource('purchases', App\Http\Controllers\PurchaseController::class)->names('purchases');
Route::resource('sales', App\Http\Controllers\SaleController::class)->names('sales');

Route::get('prueba', function () {
    return view('prueba');
});
Route::get('dashboard', function () {
    return view('dashboard');
});