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

// Route::get('/', function () {
//     return view('master');
// });

//AUDIENCE
Route::get('/', 'audienceController@index');
Route::get('/blog/{id}', 'audienceController@show');

//BLOG ADMIN
//INDEX
Route::get('/admin', 'adminController@index');

//CREATE
Route::post('/admin','adminController@store');

//EDIT
Route::put('/blog/{id}', 'adminController@update');

//DELETE
Route::delete('/admin/{id}', 'adminController@delete');

Auth::routes();
Route::get('/laravel', 'HomeController@index')->name('home');
