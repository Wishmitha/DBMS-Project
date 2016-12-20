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

//----------------------Home------------------------//

Route::get('home', function () {
    return view('home.home');
});

//--------------------Student----------------------//
Route::get('student/{id}',[
    'uses' => 'StudentController@show',
    'as' => 'student'
]);

Route::get('student_login', ['uses' => function () {
    $status = null;
    return view('logins/student_login')->with(['status' => $status]);},
    'as'=>'login_form']);

Route::post('/login_stu', [
    'uses' => 'StudentController@login',
    'as' => 'student_login'
]);

Route::post('/insertAct', [
    'uses' => 'StudentViewController@insertActivity',
    'as' => 'insert_activity'
]);

Route::post('/insertAch', [
    'uses' => 'StudentViewController@insertAchievement',
    'as' => 'insert_achievement'
]);

Route::post('/reg_stu', [
    'uses' => 'StudentViewController@studentRegister',
    'as' => 'student_register'
]);

Route::post('/delete_stu_act', [
    'uses' => 'StudentViewController@deleteActivity',
    'as' => 'delete_student_activity'
]);

//------------------------------------------------//


//----------------Supervisor---------------------//

Route::get('supervisor/{id}',[
    'uses' => 'SupervisorController@show',
    'as' => 'supervisor'
]);

Route::get('supervisor_login', ['uses' => function () {
    $status = null;
    return view('logins/supervisor_login')->with(['status' => $status]);},
    'as'=>'supervisor_login_form']);

Route::post('/login_sup', [
    'uses' => 'SupervisorController@login',
    'as' => 'supervisor_login'
]);

Route::post('/validate_act', [
    'uses' => 'SupervisorViewController@validateActivity',
    'as' => 'validate_activity'
]);

Route::post('/reg_sup', [
    'uses' => 'SupervisorViewController@supervisorRegister',
    'as' => 'supervisor_register'
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

Route::post('/assign_sup', [
    'uses' => 'AdminViewController@assignSupervisor',
    'as' => 'assign_supervisor'
]);

Route::post('/delete_stu', [
    'uses' => 'AdminViewController@deleteStudent',
    'as' => 'delete_student'
]);

Route::post('/delete_sup_act', [
    'uses' => 'AdminViewController@deleteSupervisorActivity',
    'as' => 'delete_supervisor_activity'
]);

Route::post('/add_act', [
    'uses' => 'AdminViewController@addActivity',
    'as' => 'add_activity'
]);

Route::post('/stu_rep', [
    'uses' => 'AdminViewController@createStudentReport',
    'as' => 'student_report'
]);

Route::post('/act_rep', [
    'uses' => 'AdminViewController@createActivityReport',
    'as' => 'activity_report'
]);

//------------------------------------------------//

//------------------Developmement----------------//

Route::get('test', function () {
    return view('admin/reports/stduent_comparison');
});

/*Route::get('admin/{id}',[
    'uses' => 'AdminController@show',
    'as' => 'admin'
]);*/

//-----------------------------------------------//

//Route::get('/home', 'HomeController@index');

/*Route::get('achievement/{id}', 'AchievementsController@show');
Route::get('activity/{id}', 'Extra_curricular_activityController@show');*/
