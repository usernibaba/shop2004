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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    echo date('Y-m-d H:i:s');
});

Route::get('/index','GoodsController@index');
Route::any('/create','Admin\UserController@create');
Route::post('/store','Admin\UserController@store');
Route::any('UserController/index','Admin\UserController@index');
Route::any('/delete','Admin\UserController@delete');


Route::any('/create','Admin\PuserController@create');
Route::any('/login','Admin\PuserController@login');
Route::post('/save','Admin\PuserController@save');
Route::any('PuserController/index','Admin\PuserController@index');
Route::post('/logindo','Admin\PuserController@logindo');