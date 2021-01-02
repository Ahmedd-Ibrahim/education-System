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

// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('/', 'FrontController@index')->name('front');

Route::get('/blog', 'FrontController@blog')->name('front.posts');

Route::get('/contact', 'FrontController@Contact')->name('front.contact');

Route::get('/study-path', 'FrontController@Path')->name('front.path');

Route::get('/professtional', 'FrontController@Professtional')->name('front.professtional');

Route::get('/about-us', 'FrontController@About')->name('front.about');


Route::get('/blog/post/{id}', 'FrontController@SinglePage')->name('front.posts.single');

Auth::routes(['register'=>false]);

Route::get('/dashboard', 'HomeController@index')->name('home');
