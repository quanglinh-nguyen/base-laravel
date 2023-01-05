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
//
//Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
//Auth::routes();
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
//Route::get('forgot-password', 'Auth\ForgotPasswordController@showRequestForm')->name('forgot.password');
//Route::post('forgot-password', 'Auth\ForgotPasswordController@handleForgotPassword')->name('post.forgot.password');
//Route::get('/reset-password/{email}/{token}', 'Auth\ResetPasswordController@showSetResetForm')->name('reset.password');
//Route::post('/reset-password', 'Auth\ResetPasswordController@handleSetResetPassword');
//Route::get('/set-password/{email}/{token}', 'Auth\ResetPasswordController@showSetResetForm')->name('set.password');
//Route::post('/set-password', 'Auth\ResetPasswordController@handleSetResetPassword');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout' ,[\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('home/profile', [\App\Http\Controllers\HomeController::class, 'getProfile'])->name('home.profile');
    //Route::resource('home', \App\Http\Controllers\HomeController::class);

    Route::resource('user', \App\Http\Controllers\UserController::class);

    Route::get('customer/email-outdate', [\App\Http\Controllers\CustomerController::class, 'outdate'])->name('customers.outdate');
    Route::resource('customers', \App\Http\Controllers\CustomerController::class);

    Route::resource('customers-error', \App\Http\Controllers\CustomerErrorController::class);

    Route::resource('customers-upload', \App\Http\Controllers\CustomerUploadController::class);

    Route::resource('history-update-customer', \App\Http\Controllers\HistoryUpdateCustomerController::class);

    Route::resource('acronyms-fields', \App\Http\Controllers\AcronymsController::class);
});

