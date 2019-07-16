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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.showLoginForm');
Route::get('/teacher/login', 'Auth\LoginController@showTeacherLoginForm')->name('teacher.showLoginForm');
Route::get('/teacher/register', 'Auth\RegisterController@showTeacherRegisterForm')->name('teacher.showRegisterForm');
Route::get('/teacher', 'TeacherController@index')->name('teacher.dashboard');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('admin.loginRequest');
Route::post('/teacher/login', 'Auth\LoginController@teacherLogin')->name('teacher.loginRequest');
Route::post('/teacher/register', 'Auth\RegisterController@registerTeacher')->name('teacher.registerRequest');
//Route::post('/register', 'Auth\RegisterController@createUser')->name('user.registerRequest');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::resource('/course', 'CourseController');

Route::get('/profile/{id}', 'UserController@show')->name('users_profile');
Route::get('/myaccount','UserController@edit')->name('my_settings');
Route::put('/myaccount/save','UserController@update')->name('my_settings_save');

Route::get('logout', 'Auth\LoginController@logout');
