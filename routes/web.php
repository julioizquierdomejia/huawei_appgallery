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

Route::get('/', [App\Http\Controllers\AppController::class, 'home'])->name('home');

route::resource('codes', App\Http\Controllers\CodeController::class);

Route::get('/register', [App\Http\Controllers\CodeController::class, 'register'])->name('registro');
Route::post('/register', [App\Http\Controllers\CodeController::class, 'store'])->name('user.store');
Route::get('/vervideo', [App\Http\Controllers\CodeController::class, 'vervideo'])->name('codes.vervideo');

