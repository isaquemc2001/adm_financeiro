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

Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/logon', 'App\Http\Controllers\LoginController@autenticar')->name('logon');

Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');
