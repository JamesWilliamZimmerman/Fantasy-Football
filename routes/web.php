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
@include('DB.php');

Route::get('/', 'homeController@index');

Auth::routes();

Route::get('/home/', 'homeController@index');

Route::resource('players', 'PlayerController');
Route::resource('teams', 'TeamController');
Route::resource('leagues', 'LeagueController');
Route::resource('matchups', 'MatchupController');
