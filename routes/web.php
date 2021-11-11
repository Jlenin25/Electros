<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Cotización
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->names('categorias');
Route::resource('clients', App\Http\Controllers\ClientController::class)->names('clients');
Route::resource('products', App\Http\Controllers\ProductController::class)->names('products');
Route::resource('providers', App\Http\Controllers\ProviderController::class)->names('providers');
Route::resource('purchases', App\Http\Controllers\PurchaseController::class)->names('purchases');
Route::resource('sales', App\Http\Controllers\SaleController::class)->names('sales');
Route::resource('evaluacions', App\Http\Controllers\EvaluacionController::class)->names('evaluacions');
Route::resource('orden-trabajos', App\Http\Controllers\OrdenTrabajoController::class)->names('orden-trabajos');

// CRUD - Cotización
Route::resource('areas', App\Http\Controllers\AreaController::class)->names('areas');
Route::resource('conditions', App\Http\Controllers\ConditionController::class)->names('conditions');
Route::resource('deliveries', App\Http\Controllers\DeliverieController::class)->names('deliveries');
Route::resource('expires', App\Http\Controllers\ExpireController::class)->names('expires');
Route::resource('footers', App\Http\Controllers\FooterController::class)->names('footers');
Route::resource('coins', App\Http\Controllers\CoinController::class)->names('coins');
Route::resource('stateclients', App\Http\Controllers\StateclientController::class)->names('stateclients');
Route::resource('statepurchases', App\Http\Controllers\StatepurchaseController::class)->names('statepurchases');
Route::resource('waytopays', App\Http\Controllers\WaytopayController::class)->names('waytopays');
Route::resource('ordencompras', App\Http\Controllers\OrdenCompraController::class)->names('ordencompras');

// Items
Route::resource('purchasedetails', App\Http\Controllers\PurchaseDetailsController::class)->names('purchasedetails');


Route::get('dashboard', function () {
	return view('prueba');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

