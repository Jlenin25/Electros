<?php

use Illuminate\Support\Facades\Route;

// Cotización
Route::resource('categories', App\Http\Controllers\CategoryController::class)->names('categories');
Route::resource('clients', App\Http\Controllers\ClientController::class)->names('clients');
Route::resource('products', App\Http\Controllers\ProductController::class)->names('products');
Route::resource('providers', App\Http\Controllers\ProviderController::class)->names('providers');
Route::resource('purchases', App\Http\Controllers\PurchaseController::class)->names('purchases');
Route::resource('sales', App\Http\Controllers\SaleController::class)->names('sales');

// CRUD - Cotización
Route::resource('areas', App\Http\Controllers\AreaController::class)->names('areas');
Route::resource('conditions', App\Http\Controllers\ConditionController::class)->names('conditions');
Route::resource('deliverys', App\Http\Controllers\DeliveryController::class)->names('deliverys');
Route::resource('expires', App\Http\Controllers\ExpireController::class)->names('expires');
Route::resource('footers', App\Http\Controllers\FooterController::class)->names('footers');
Route::resource('moneys', App\Http\Controllers\MoneyController::class)->names('moneys');
Route::resource('stateclients', App\Http\Controllers\StateclientController::class)->names('stateclients');
Route::resource('statepurchases', App\Http\Controllers\StatepurchaseController::class)->names('waytopays');
Route::resource('waytopays', App\Http\Controllers\WaytopayController::class)->names('waytopays');

Route::get('dashboard', function () {
    return view('prueba');
});