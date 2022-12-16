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
Route::get('login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::resource('post', \App\Http\Controllers\PostController::class);
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::get('partner', 'App\Http\Controllers\HomeController@partner')->name('partner');
Route::get('bank', 'App\Http\Controllers\HomeController@bank')->name('bank');
Route::get('home2', 'App\Http\Controllers\HomeController@home2')->name('home2');
