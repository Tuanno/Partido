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


Route::resource('brokens','BrokenController');

Route::resource('candidates','CandidateController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/brokens', 'BrokenController@index');
Route::get('/brokens/create', 'BrokenController@create');

Route::get('/votar', 'CandidateController@votar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
