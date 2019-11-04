<?php

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

use Illuminate\Support\Facades\Route;


// Users
Route::get('/register', 'RegisterController@showRegisterForm')->name('showRegisterForm');
Route::post('register', 'RegisterController@register')->name('registerRequest');
Route::get('/login', 'LoginController@showLoginForm')->name('showLoginForm');
Route::post('/login', 'LoginController@login')->name('loginRequest');
Route::get('logout', 'LoginController@logout')->name('logout');
