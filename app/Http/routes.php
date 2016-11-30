<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


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
