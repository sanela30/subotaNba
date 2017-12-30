<?php

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
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

Route::get('/', ['as'=>'all-teams', 'uses'=>'TeamsController@index']);
Route::get('/team/{id}', ['as'=>'single-team', 'uses'=>'TeamsController@show']);
Route::get('verify/{id}','LoginController@verify');
Route::post('/register', 'RegisterController@store');
Route::get('/register','RegisterController@create')->name('register');
Route::get('/logout', 'LoginController@destroy');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/player/{player_id}', ['as'=>'single-player', 'uses'=>'PlayersController@show']);
Route::get('/player/{player_id}', ['as'=>'single-player', 'uses'=>'PlayersController@show']);

Route::post('/team/{teamId}/comments',['as'=>'comments-team', 'uses'=>'CommentsController@store']);