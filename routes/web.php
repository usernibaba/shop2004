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

Route::prefix('puser')->group(function (){

        Route::any('/create','Admin\PuserController@create');
        Route::any('/login','Admin\PuserController@login');
        Route::post('/save','Admin\PuserController@save');
        Route::any('/index','Admin\PuserController@index');
        Route::post('/logindo','Admin\PuserController@logindo');
});
Route::prefix('admin')->group(function(){

    Route::get('/index','GoodsController@index');
    Route::any('/create','Admin\UserController@create');
    Route::any('/delete/{user_id}','Admin\UserController@delete');
    Route::any('/update/{user_id}','Admin\UserController@update');
    Route::any('/edit/{user_id}','Admin\UserController@edit');
    Route::post('/store','Admin\UserController@store');
    Route::any('/index','Admin\UserController@index');
    Route::any('/delete','Admin\UserController@delete');
});
