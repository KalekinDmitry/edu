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

Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.showLoginForm');
Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.loginRequest');
Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
Route::get('/profile/{id}', 'Admin\AdminController@show')->name('admin.profile');
Route::get('/profile/edit', 'Admin\AdminController@edit')->name('admin.profile_settings');
Route::get('/tables/users', 'Admin\AdminController@showUsersList')->name('users.list');
Route::get('/tables/teachers', 'Admin\AdminController@showTeachersList')->name('teachers.list');
Route::get('/tables/admins', 'Admin\AdminController@showAdminsList')->name('admins.list');

Route::get('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
