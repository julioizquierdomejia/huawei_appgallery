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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [App\Http\Controllers\AppController::class, 'home']);

Route::get('/register', [App\Http\Controllers\AppController::class, 'register'])->name('registro');

route::resource('codes', App\Http\Controllers\CodeController::class);

Route::get('/vevideo', [App\Http\Controllers\CodeController::class, 'vevideo'])->name('codes.vervideo');

