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

Route::get('/','ProductController@add');

Route::get('/addProduct','ProductController@addProduct');
Route::get('/edit/{id}','ProductController@edit');
Route::get('/editProduct','ProductController@editProduct');
Route::get('/delete/{id}','ProductController@delete');  
