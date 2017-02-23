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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'RoomsController@index');
Route::post('/save-chair', 'ChairsController@saveChair');

// Admin routes

Route::get('/add-room', 'Admin\RoomsController@create');
Route::post('/add-room', 'Admin\RoomsController@store');

Route::get('/rooms/{id}/add-movie', 'Admin\RoomsController@createMovie');
Route::post('/add-movie', 'Admin\RoomsController@addMovie');

Route::get('/rooms/{id}/add-chair', 'Admin\RoomsController@createChair');

Route::post('/add-chair', 'Admin\RoomsController@addChair');