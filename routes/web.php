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



Route::get('',[
    'as'=>'index',
    'uses'=>'AdminController@show'
]);

Route::get('/admin',[
    'as'=>'index',
    'uses'=>'AdminController@admin'
]);


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('register/',[
    'as'=>'register',
    'uses'=>'TestController@test'
]);
Route::get('/home',[
    'as'=>'home',
    'uses'=>'HomeController@index'
]);