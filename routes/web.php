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


Route::get('test',[
    'uses' => 'testController@index',
    'as' => 'home'
]);
Route::get('/',[
    'uses' => 'generateProgressions@index',
    'as' => 'home'
]);
Route::get('/generate',[
    'uses' => 'generateProgressions@generate',
    'as' => 'generate'
]);

