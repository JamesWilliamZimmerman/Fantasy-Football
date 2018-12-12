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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@Index');

Route::get('/player', 'PlayerController@Index');

Route::get('/team', 'TeamController@Index');

Route::get('/league', 'LeagueController@Index');

Route::get('/matchup', 'MatchupController@Index');
