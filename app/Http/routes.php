<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
    Route::get('/login', ['as' => 'login', 'uses' => 'PagesController@login']);
    Route::get('/vault', ['middleware' => 'auth', 'as' => 'vault', 'uses' => 'PagesController@vault']);
    Route::get('/vault/index', ['middleware' => 'auth', 'as' => 'index', 'uses' => 'ItemController@index']);
    Route::get('/vault/unsigned', ['middleware' => 'auth', 'as' => 'unsigned', 'uses' => 'ItemController@unsigned']);
    Route::post('/authenticate', ['as' => 'authenticate', 'uses' => 'AuthController@authenticate']);

    Route::resource('item', 'ItemController');

});
