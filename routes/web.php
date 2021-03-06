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

Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('welcome', [
        'search' => $request->query('search'),
        'sort' => $request->query('sort'),
    ]);
});

Route::group(['prefix' => 'cart'], function () {
    Route::post('/', [\App\Http\Controllers\CartController::class, 'addCart']);
    Route::delete('/{pid}', [\App\Http\Controllers\CartController::class, 'remove']);
});
