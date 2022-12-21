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
    return view('welcome');
});

Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');


Route::get('home/profile', [\App\Http\Controllers\HomeController::class, 'getProfile'])->name('home.profile');
Route::resource('home', \App\Http\Controllers\HomeController::class);

Route::resource('user', \App\Http\Controllers\UserController::class);

Route::resource('customer', \App\Http\Controllers\CustomerController::class);
Route::get('customer-outdate', [\App\Http\Controllers\CustomerController::class, 'outdate'])->name('customer.outdate');

Route::resource('customer-upload', \App\Http\Controllers\CustomerUploadController::class);

Route::resource('history-update-customer', \App\Http\Controllers\HistoryUpdateCustomerController::class);

Route::resource('acronyms-banking', \App\Http\Controllers\AcronymsBankingController::class);
