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
    Route::get('/vault', ['as' => 'vault', 'uses' => 'PagesController@vault']);
    Route::post('/authenticate', ['as' => 'authenticate', 'uses' => 'AuthController@authenticate']);
    Route::resource('item', 'ItemController');

});
