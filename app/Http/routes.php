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

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
Route::get('/about_us', ['as' => 'about_us', 'uses' => 'HomeController@about_us']);
Route::get('/product', ['as' => 'product', 'uses' => 'HomeController@product']);
Route::get('/pricing', ['as' => 'pricing', 'uses' => 'HomeController@pricing']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('/create_contact', ['as' => 'contact', 'uses' => 'HomeController@create_contact']);