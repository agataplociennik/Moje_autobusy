<?php

use App\Http\Controllers\MyBusController;
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
Route::get('/', \App\Http\Controllers\Auth\LoginController::class.'@login');
Route::resource('my_bus', MyBusController::class)->middleware('auth');

\Illuminate\Support\Facades\Auth::routes();

