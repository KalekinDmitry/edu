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

// Teachers
Route::get('/', 'TeacherController@index')->name('dashboard');





Route::get('/profile', 'TeacherController@edit')->name('settings');
Route::put('/profile/save', 'TeacherController@update')->name('settings_save');
Route::resource('/course', 'CourseController');
Route::resource('/module', 'ModuleController');
Route::resource('/lesson', 'LessonController');
Route::resource('/block/text', 'Blocks\TextBlockController');
Route::resource('/lesson/{lesson}/videoBlock', 'Blocks\VideoBlockController');
Route::resource('/lesson/{lesson}/taskBlock', 'Blocks\TaskBlockController');
Route::resource('/taskBlock/{taskBlock}/simpleQuestion', 'TestAndQuestion\SimpleQuestionController');
Route::resource('/taskBlock/{taskBlock}/testQuestion', 'TestAndQuestion\TestQuestionController');
Route::resource('/testQuestion/{testQuestion}/testAnswer', 'TestAndQuestion\TestAnswerController');

Route::resource('/classroom', 'ClassroomController');

Route::resource('/classroom/{classroom}/user/{user}/invite', 'Classroom\ClassroomInviteController', [
    'names' => [
        'store' => 'classroomInvite.store',
        'create' => 'classroomInvite.create',
        'show' => 'classroomInvite.show',
        'destroy' => 'classroomInvite.destroy',
    ]
]);
