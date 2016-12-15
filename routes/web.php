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


// confirmed routes


//--------------------Student----------------------//
Route::get('student/{id}',[
    'uses' => 'StudentController@show',
    'as' => 'student'
]);

Route::get('student_login', ['uses' => function () {
    return view('logins/student_login');},
    'as'=>'login_form']);

Route::post('/login_stu', [
    'uses' => 'StudentController@login',
    'as' => 'student_login'
]);

//------------------------------------------------//


//----------------Supervisor---------------------//

Route::get('supervisor/{id}',[
    'uses' => 'SupervisorController@show',
    'as' => 'supervisor'
]);

Route::get('supervisor_login', ['uses' => function () {
    return view('logins/supervisor_login');},
    'as'=>'supervisor_login_form']);

Route::post('/login_sup', [
    'uses' => 'SupervisorController@login',
    'as' => 'supervisor_login'
]);

//------------------------------------------------//

//----------------------Admin--------------------//

Route::get('admin/{id}',[
    'uses' => 'AdminController@show',
    'as' => 'admin'
]);

Route::get('admin_login', ['uses' => function () {
    return view('logins/admin_login');},
    'as'=>'admin_login_form']);


Route::post('/login_admin', [
    'uses' => 'AdminController@login',
    'as' => 'admin_login'
]);

//------------------------------------------------//

//------------------Developmement----------------//

Route::get('test', function () {
    return view('supervisor/main');
});

/*Route::get('admin/{id}',[
    'uses' => 'AdminController@show',
    'as' => 'admin'
]);*/

//-----------------------------------------------//

Route::get('/home', 'HomeController@index');

/*Route::get('achievement/{id}', 'AchievementsController@show');
Route::get('activity/{id}', 'Extra_curricular_activityController@show');*/
