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

Route::get('/', "HomeController@index")->name('home');

Auth::routes();

//language routes
Route::get('/en', 'LocaleController@en')->name('en');
Route::get('/fr', 'LocaleController@fr')->name('fr');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/actions', 'HomeController@actions')->name('actions');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/presentation', 'HomeController@presentation')->name('presentation');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/contact', "HomeController@contact")->name('contact');
Route::post('/contact', 'HomeController@contactStore')->name('contact.store');

//problems
Route::get('/problems', 'ProblemsController@index')->name('problems');
