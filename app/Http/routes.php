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
// */

Route::get('/', ['as' => 'index', 'uses' => 'TrackingController@index']);
Route::any('/tarif', ['as' => 'tarif', 'uses' => 'TrackingController@tarif']);
Route::any('/get_tarif', ['as' => 'tarif', 'uses' => 'TrackingController@get_tarif']);
Route::any('/contact', ['as' => 'contact', 'uses' => 'TrackingController@contact']);
Route::any('/tracking', ['as' => 'tracking', 'uses' => 'TrackingController@tracking']);
