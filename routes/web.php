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

//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('setlocale/{locale}', 'LocaleController@setLocale')->name('setLocale');

// Users
Route::prefix('user')->group(function () {
    Route::get('/register', 'Student\Auth\RegisterController@showRegisterForm')->name('user.showRegisterForm');
    Route::post('register', 'Student\Auth\RegisterController@register')->name('user.registerRequest');

    Route::get('/login', 'Student\Auth\LoginController@showLoginForm')->name('user.showLoginForm');
    Route::post('/login', 'Student\Auth\LoginController@login')->name('user.loginRequest');

    Route::get('/myaccount', 'Student\UserController@edit')->name('user.settings');
    Route::put('/myaccount/save', 'Student\UserController@update')->name('user.settings_save');

    Route::get('/', 'Student\UserController@index')->name('user.dashboard');

    Route::get('logout', 'Student\Auth\LoginController@logout')->name('user.logout');
});

// Admins
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.showLoginForm');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.loginRequest');
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/profile/{id}', 'Admin\AdminController@show')->name('admin.profile');
    Route::get('/profile/edit', 'Admin\AdminController@edit')->name('admin.profile_settings');
    Route::get('/tables/users', 'Admin\AdminController@showUsersList')->name('users.list');
    Route::get('/tables/teachers', 'Admin\AdminController@showTeachersList')->name('teachers.list');
    Route::get('/tables/admins', 'Admin\AdminController@showAdminsList')->name('admins.list');

    Route::get('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
});

// Teachers
Route::prefix('teacher')->group(function () {
    Route::get('/register', 'Teacher\Auth\RegisterController@showRegisterForm')->name('teacher.showRegisterForm');
    Route::post('register', 'Teacher\Auth\RegisterController@register')->name('teacher.registerRequest');

    Route::get('/login', 'Teacher\Auth\LoginController@showLoginForm')->name('teacher.showLoginForm');
    Route::post('/login', 'Teacher\Auth\LoginController@login')->name('teacher.loginRequest');

    Route::get('/', 'Teacher\TeacherController@index')->name('teacher.dashboard');

    Route::get('/myaccount', 'Teacher\TeacherController@edit')->name('teacher.settings');
    Route::put('/myaccount/save', 'Teacher\TeacherController@update')->name('teacher.settings_save');

    Route::resource('/course', 'Teacher\Course\CourseController');

    Route::resource('/course/{course}/module', 'Teacher\Module\ModuleController');
    Route::resource('/module/{module}/lesson', 'Teacher\Lesson\LessonController');
    Route::resource('/lesson/{lesson}/textBlock', 'Teacher\Blocks\TextBlockController');
    Route::resource('/lesson/{lesson}/videoBlock', 'Teacher\Blocks\VideoBlockController');
    Route::resource('/lesson/{lesson}/taskBlock', 'Teacher\Blocks\TaskBlockController');
    Route::resource('/taskBlock/{taskBlock}/simpleQuestion', 'Teacher\TestAndQuestion\SimpleQuestionController');
    Route::resource('/taskBlock/{taskBlock}/testQuestion', 'Teacher\TestAndQuestion\TestQuestionController');
    Route::resource('/testQuestion/{testQuestion}/testAnswer', 'Teacher\TestAndQuestion\TestAnswerController');

    Route::resource('/classroom', 'Teacher\Classroom\ClassroomController');

    Route::resource('/classroom/{classroom}/user/{user}/invite', 'Teacher\Classroom\ClassroomInviteController', [
        'names' => [
            'store' => 'classroomInvite.store',
            'create' => 'classroomInvite.create',
            'show' => 'classroomInvite.show',
            'destroy' => 'classroomInvite.destroy',
        ]
    ]);

    Route::get('/logout', 'Teacher\Auth\LoginController@logout')->name('teacher.logout');
});


// Redefinition of some routes (Elkin)
Route::get('/course/{course}', 'Teacher\Course\CourseController@show')->name('course.show');
//Route::put('/classroom/{classroom}', 'ClassroomController@update')->name('classroom.update');
