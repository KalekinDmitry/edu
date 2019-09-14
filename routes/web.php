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

// Users
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/user/myaccount', 'UserController@edit')->name('user_settings');
Route::put('/user/myaccount/save', 'UserController@update')->name('user_settings_save');
Route::get('/myInvites', 'UserController@showInvites')->name('user.invites');

// Teachers
Route::get('/teacher/register', 'Auth\RegisterController@showTeacherRegisterForm')->name('teacher.showRegisterForm');
Route::post('/teacher/register', 'Auth\RegisterController@registerTeacher')->name('teacher.registerRequest');
Route::get('/teacher/login', 'Auth\LoginController@showTeacherLoginForm')->name('teacher.showLoginForm');
Route::post('/teacher/login', 'Auth\LoginController@teacherLogin')->name('teacher.loginRequest');
Route::get('/teacher', 'TeacherController@index')->name('teacher.dashboard');
Route::get('/teacher/myaccount', 'TeacherController@edit')->name('teacher_settings');
Route::put('/teacher/myaccount/save', 'TeacherController@update')->name('teacher_settings_save');

// Admins
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.showLoginForm');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.loginRequest');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/profile/{id}', 'AdminController@show')->name('admin_profile');
    Route::get('/profile/edit', 'AdminController@edit')->name('admin_profile_settings');
    Route::get('/tables/users', 'AdminController@showUsersList')->name('users.list');
    Route::get('/tables/teachers', 'AdminController@showTeachersList')->name('teachers.list');
    Route::get('/tables/admins', 'AdminController@showAdminsList')->name('admins.list');

    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('logout', 'Auth\LoginController@logout');

Route::resource('/course', 'CourseController');
Route::resource('/course/{course}/lesson', 'LessonController');
Route::resource('/teacher/classroom', 'ClassroomController');

Route::resource('/teacher/classroom/{classroom}/user/{user}/invite', 'ClassroomInviteController', [
    'names' => [
        'store' => 'classroomInvite.store',
        'create' => 'classroomInvite.create',
        'show' => 'classroomInvite.show',
        'destroy' => 'classroomInvite.destroy',
    ]
]);

Route::get('setlocale/{locale}', 'LocaleController@setLocale')->name('setLocale');
