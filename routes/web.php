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
Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.showLoginForm');
Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('admin.loginRequest');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/profile/{id}', 'AdminController@show')->name('admin_profile');
Route::get('/admin/profile/edit', 'AdminController@edit')->name('admin_profile_settings');
Route::get('/admin/tables/users', 'AdminController@showUsersList')->name('users.list');
Route::get('/admin/tables/teachers', 'AdminController@showTeachersList')->name('teachers.list');
Route::get('/admin/tables/admins', 'AdminController@showAdminsList')->name('admins.list');

//Route::post('/register', 'Auth\RegisterController@createUser')->name('user.registerRequest');

Route::get('logout', 'Auth\LoginController@logout');

Route::resource('/course', 'CourseController');
Route::resource('/course/{course}/module', 'ModuleController');
Route::resource('/module/{module}/lesson', 'LessonController');
Route::resource('/lesson/{lesson}/textBlock', 'TextBlockController');
Route::resource('/lesson/{lesson}/videoBlock', 'VideoBlockController');
Route::resource('/lesson/{lesson}/taskBlock', 'TaskBlockController');
Route::resource('/taskBlock/{taskBlock}/simpleQuestion', 'simpleQuestionController');
Route::resource('/taskBlock/{taskBlock}/testQuestion', 'testQuestionController');
Route::resource('/testQuestion/{testQuestion}/testAnswer', 'testAnswerController');

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
