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




Route::get('/teacher/login', 'Auth\LoginController@showTeacherLoginForm')->name('teacher.showLoginForm');
Route::get('/teacher/register', 'Auth\RegisterController@showTeacherRegisterForm')->name('teacher.showRegisterForm');
Route::get('/teacher', 'TeacherController@index')->name('teacher.dashboard');
Route::get('/teacher/profile/edit', 'TeacherController@edit')->name('teacher_settings');
Route::get('/teacher/profile/{id}', 'TeacherController@show')->name('teacher_profile');


Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.showLoginForm');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/profile/edit', 'AdminController@edit')->name('admin_settings');
Route::get('/admin/profile/{id}', 'AdminController@show')->name('admin_profile');



Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('admin.loginRequest');
Route::post('/teacher/login', 'Auth\LoginController@teacherLogin')->name('teacher.loginRequest');
Route::post('/teacher/register', 'Auth\RegisterController@registerTeacher')->name('teacher.registerRequest');
//Route::post('/register', 'Auth\RegisterController@createUser')->name('user.registerRequest');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::resource('/course', 'CourseController');
Route::resource('/course/{course}/lesson', 'LessonController');
//Route::get('/course/{course}/lesson/create', 'LessonController@create')->name('lesson.create');

Route::get('/profile/{id}', 'UserController@show')->name('users_profile');
Route::get('/myaccount','UserController@edit')->name('my_settings');
Route::put('/myaccount/save','UserController@update')->name('my_settings_save');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('setlocale/{locale}', 'LocaleController@setLocale')->name('setLocale');
