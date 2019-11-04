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
Route::get('/myaccount', 'UserController@edit')->name('settings');
Route::put('/myaccount/save', 'UserController@update')->name('settings_save');

Route::get('/', 'UserController@index')->name('dashboard');

