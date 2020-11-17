<?php

use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


// Dashboard Routes
Route::prefix('dashboard')->middleware(['auth'])->name('admin.')->group(function (){
    /* Roles and permission */
    Route::namespace('roles')->group(function(){
        Route::resource('roles', 'RolesController');
    });
    /* End roles & Permissions*/

    Route::resource('siteSettings','settings\basicsInfoController')->except(['show','store','edit','destroy','create']); //  Site basics Info settings

    Route::resource('mangerSetting' , 'settings\MangerAccountSettingController')->except(['show','store','edit','destroy','create']);

    Route::resource('student', 'studentController');

    Route::resource('teacher', 'teacherController')->except('show');

    Route::resource('subject','SubjectController')->except('show');

    Route::resource('studyPhase','PhaseController')->except('show');
    /* Delete Year of Phase */
    Route::delete('studyPhaseDeleteYear/{id}',"PhaseController@delete")->name('phase.delete');

    Route::resource('class','classesController')->except('show');

    Route::resource('health-report','HealthReportController');

    Route::resource('food-cycle', 'FoodCycleController');

    Route::resource('class-schedule','ClassSchedulerController');

    Route::resource('study-schedule','StudyScheduleController')->except(['create']);

    /* passing class id in create method */
    Route::get('study-schedule/create/{id}','StudyScheduleController@create')->name('study-schedule.create');

}); // End of Dashboard Routes



