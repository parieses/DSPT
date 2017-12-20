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
///////////后台///////////////
Route::get('Admin/login', function () {
    if (!empty(session('user_info'))){
        alert('已登录','/Admin/index','1');
    }
    return view('login');
});
Route::get('Admin/logout','Admin\loginController@logout');
Route::post('Admin/login','Admin\loginController@login');
Route::get('Admin/index','Admin\indexController@index');
Route::get('Admin/commoditylist','Admin\commoditylistController@index');
//商品添加
Route::get('Admin/commodityadd',function () {
    if (empty(session('user_info'))){
        alert('请登录!','/Admin/index','1');
    }
    $user = session('user_info');
    return view('commodityadd')->with('user',$user);
});
Route::get('/Admin/commodityclassification',function () {
    if (empty(session('user_info'))){
        alert('请登录!','/Admin/index','1');
    }
    $user = session('user_info');
    return view('commodityclassification')->with('user',$user);
});

//管理员信息
Route::get('Admin/user',function () {
    if (empty(session('user_info'))){
        alert('请登录!','/Admin/login','1');
    }
    $user = session('user_info');
    return view('user')->with('user',$user);
});
Route::post('Admin/user','Admin\userController@save');
//////////////前端//////////////////
Route::get('/','Home\IndexController@index');
Route::get('/account','Home\AccountController@account');
Route::get('/login','Home\LoginController@login');
Route::get('/checkout','Home\CheckoutController@checkout');
Route::get('/contact','Home\ContactController@contact');
Route::get('/products','Home\ProductsController@products');
Route::get('/single','Home\SingleController@single');