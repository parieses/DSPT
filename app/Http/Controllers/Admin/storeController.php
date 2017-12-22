<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

class storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = session('user_info');
        return View('store')->with('user',$user);;
    }

    public function storeadd()
    {
        $arr = Input::all();
        unset($arr['_token']);
        if(!Input::hasFile('browse')){
            alert('图片地址不存在!','/Admin/commodityadd',2);
        }
        //验证文件是否上传成功
        if(!Input::file('browse')->isValid()){
            alert('图片上传失败!','/Admin/commodityadd',2);
        }

        Input::file('browse')->move(base_path().'/public/commodity/','商品'.time().'.png');
        dd($arr['browse']);
    }

}
