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

Route::get('Admin/login', function () {
    if (!empty(session(''))){
        session(null);
        alert('已登录','/Admin/index','1');
    }
    return view('login');
});
Route::get('Admin/logout','Admin\loginController@logout');
Route::post('Admin/login','Admin\loginController@login');
Route::get('Admin/index','Admin\indexController@index');