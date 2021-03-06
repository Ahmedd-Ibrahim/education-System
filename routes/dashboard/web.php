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

    Route::resource('users','UserController');

    Route::namespace('settings')->name('front.')->group(function () {

        Route::resource('siteSettings','basicsInfoController')->except(['show','store','edit','destroy','create']); //  Site basics Info settings

        Route::resource('slide', 'slideController')->except('show');

        Route::resource('service', 'ServiceController')->except('show');

        Route::resource('provide', 'ProviderController')->except('show');

        Route::resource('professional', 'ProfessionalController')->except('show');

        Route::resource('site-subject', 'SiteSubjectController')->except('show');

        Route::resource('site-experince', 'SiteExperinceController')->except('show');

        Route::resource('proof', 'ProofController')->except('show');

        Route::resource('contact', 'ContactController')->except('show');

        Route::resource('blog', 'BlogController');

        Route::resource('comment', 'CommentController');
        Route::get('comment-active/{id}', 'CommentController@active')->name('active');

        Route::resource('static-title', 'StaticTitleController')->only(['index','update']);


    }); // End of website settings

     Route::namespace('roles')->group(function(){

        Route::resource('roles', 'RolesController');

        Route::resource('permission', 'PermissionController')->only(['create','store']);
    }); // End of Roles

    Route::resource('mangerSetting' , 'settings\MangerAccountSettingController')->except(['show','store','edit','destroy','create']);

    Route::resource('student', 'studentController');

    Route::resource('teacher', 'teacherController')->except('show');

    Route::resource('subject','SubjectController')->except('show');

    Route::resource('subject-mini-group','SubjectMiniGroupController')->except('show');

    Route::resource('studyPhase','PhaseController')->except('show');
    /* Delete Year of Phase */
    Route::delete('studyPhaseDeleteYear/{id}',"PhaseController@delete")->name('phase.delete');

    Route::resource('group','GroupController')->except('show');

    Route::resource('class','ClassesController')->except('show');

    Route::resource('health-report','HealthReportController');

    Route::resource('food-cycle', 'FoodCycleController');

    Route::resource('class-schedule','ClassSchedulerController');
    Route::get('class-schedule/active/{id}','ClassSchedulerController@active')->name('class-schedule.active');

    Route::resource('study-schedule','StudyScheduleController')->except(['create']);
    // Delete subject from editing table
    Route::get('study-schedule/delete/{id}','StudyScheduleController@delete')->name('study-schedule.delete');

    /* passing class id in create method */
    Route::get('study-schedule/create/{id}','StudyScheduleController@create')->name('study-schedule.create');

    Route::resource('student-register', 'StudentRegisterController');

    Route::resource('student-table', 'StudentsTableController');

}); // End of Dashboard Routes



