<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('resit')->group(function () {
    Route::get('/sales/{resit_id}', [App\Http\Controllers\Resit\SalesController::class, 'getSales']);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('/inventory')->group(function () {
    Route::get('/',[App\Http\Controllers\Inventory\ItemsController::class, 'index']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/',[App\Http\Controllers\Customers\CustomerController::class, 'index']);
});

Route::prefix('/sales')->group(function () {
    Route::get('/new', [App\Http\Controllers\Sales\SaleController::class, 'addNewSale']);
    Route::get('/generated/{sales_id}',[App\Http\Controllers\Sales\SaleController::class, 'getGeneratedSales']);
    Route::get('/',[App\Http\Controllers\Sales\SaleController::class, 'index']);
});

Route::prefix('/transport')->group(function () {
    Route::get('/',[App\Http\Controllers\Inventory\ItemsController::class, 'index']);
});

Route::prefix('/settings')->group(function () {
    Route::get('/',[App\Http\Controllers\Settings\SettingController::class, 'index']);
});

Route::prefix('/profile')->group(function () {
    Route::get('/',[App\Http\Controllers\Profile\ProfileController::class, 'index']);
});