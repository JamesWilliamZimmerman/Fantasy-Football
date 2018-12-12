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

Route::get('/', 'homeController@index');

Auth::routes();

Route::get('/home', 'homeController@index');

Route::get('/player', 'playerController@index');

Route::get('/team', 'TeamController@Index');

Route::get('/league', 'LeagueController@Index');

Route::get('/matchup', 'MatchupController@Index');
