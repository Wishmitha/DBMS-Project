<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\DB;

/*
Route::resource('student', 'StudentController');
Route::resource('extra_curricular_activity', 'Extra_curricular_activityController');
Route::resource('student_activity', 'Student_activityController');
Route::resource('supervisor', 'SupervisorController');
Route::resource('student_login', 'Student_loginController');
Route::resource('supervisor_login', 'Supervisor_loginController');
Route::resource('supervisor_activity', 'Supervisor_activityController');
Route::resource('sport', 'SportController');
Route::resource('club', 'ClubController');
Route::resource('competition', 'CompetitionController');
Route::resource('achievements', 'AchievementsController');
*/

Route :: get('cards','CardsController@index');

Route :: get('cards/{id}','CardsController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', 'StudentController@create');