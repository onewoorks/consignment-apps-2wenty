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

Route::get('/', function () {
    return view('pages.home');
});

Route::prefix('resit')->group(function () {
    Route::get('/sales/{resit_id}', [App\Http\Controllers\Resit\SalesController::class, 'getSales']);
});

Route::prefix('inventory')->group(function () {
    Route::get('/',[App\Http\Controllers\Inventory\ItemsController::class, 'index']);
});