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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::resource('/course', 'CourseController');

Route::get('/profile/{id}', 'UserController@show')->name('users_profile');
Route::get('/myaccount','UserController@edit')->name('my_settings');
Route::put('/myaccount/save','UserController@update')->name('my_settings_save');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('setlocale/{locale}', 'LocaleController@setLocale')->name('setLocale');