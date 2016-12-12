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
    if(Auth::user()){
        return view('home');
    }else{
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'user'], function () {
    Route::get('/', ['as' => 'user.index','uses' => 'UserController@index']);
    Route::get('/image', ['as' => 'user.image','uses' => 'UserController@image']);
    Route::get('/name', ['as' => 'user.name','uses' => 'UserController@name']);
    Route::get('/delete_picture', ['as' => 'user.delete_picture','uses' => 'UserController@delete_picture']);
    Route::post('/upload', ['as' => 'user.upload','uses' => 'UserController@upload']);
    Route::post('/update', ['as' => 'user.update','uses' => 'UserController@update']);
});