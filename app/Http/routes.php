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

Route::get('Admin/comment','Admin\commentController@index');
Route::post('Admin/search','Admin\commentController@search');
Route::get('Admin/store','Admin\storeController@index');
Route::post('Admin/storeadd','Admin\storeController@storeadd');
//轮播图
Route::get('Admin/carouselfigure','Admin\storeController@carouselfigure');
Route::post('Admin/carouselfigure','Admin\storeController@carouselfigureadd');
//////////////前端//////////////////
//主页面
Route::get('/','Home\IndexController@index');
//注册页面
Route::get('/account','Home\AccountController@account');
//登录页面
Route::get('/login','Home\LoginController@login');
//结账页面
Route::get('/checkout','Home\CheckoutController@checkout');
//练习页面
Route::get('/contact','Home\ContactController@contact');
//产品页面
Route::get('/products','Home\ProductsController@products');
//订单页面
Route::get('/single','Home\SingleController@single');
//注册
Route::post('/submit','Home\LoginController@useradd');
Route::post('/advise','Home\LoginController@advise');
Route::post('p_account','Home\AccountController@p_account');
Route::post('user_login','Home\LoginController@user_login');
//退出登录
Route::get('loginout','Home\LoginController@logout');