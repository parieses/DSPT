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
    $status =  isset($_SERVER['HTTP_REFERER']) ?  $_SERVER['HTTP_REFERER'] :'/Admin/index';
    session(['status'=>$status]);
    return view('login');
});
Route::get('Admin/logout','Admin\loginController@logout');
Route::post('Admin/login','Admin\loginController@login');
Route::get('Admin/index','Admin\indexController@index');
Route::get('Admin/commoditylist','Admin\commoditylistController@index');
Route::get('Admin/commodityadd','Admin\commoditylistController@Comlists');
//商品添加

//商品分类展示
Route::get('/Admin/commodityclassification','Admin\commoditylistController@lists');
Route::post('/Admin/commodityclassificationadd','Admin\commoditylistController@classsave');
//商品分类添加
Route::get('/Admin/commodityclassificationadd','Admin\commoditylistController@typelist');
//删除方法
Route::get('/Admin/comdel',['middleware' => ['Comdel']]);
//商品回收
Route::get('/Admin/commodityrecycle',function () {
    if (empty(session('user_info'))){
        alert('请登录!','/Admin/login','2');
    }
    $user = session('user_info');
    return view('commodityrecycle')->with('user',$user);
});

//管理员信息展示
Route::get('Admin/user',function () {
    if (empty(session('user_info'))){
        alert('请登录!','/Admin/login','2');
    }
    $user = session('user_info');
    return view('user')->with('user',$user);
});
//管理员信息保存
Route::post('Admin/user','Admin\userController@save');
//商品添加
Route::post('Admin/commoditylistsave','Admin\commoditylistController@Comadd');
//////////////前端//////////////////
Route::get('/','Home\IndexController@index');
Route::get('/account','Home\AccountController@account');
Route::get('/login','Home\LoginController@login');
Route::get('/checkout','Home\CheckoutController@checkout');
Route::get('/contact','Home\ContactController@contact');
Route::get('/products','Home\ProductsController@products');
Route::get('/single','Home\SingleController@single');