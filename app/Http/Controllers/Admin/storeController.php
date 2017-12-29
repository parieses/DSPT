<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
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
    public function carouselfigure(){
        $user = session('user_info');
        $info =  DB::table('Carousel')->get();
        return View('carouselfigure',compact('info'))->with('user',$user);;
    }
    public function carouselfigureadd(){
        $arr = Input::all();
        unset($arr['_token']);
        if (!isset($arr['ad_code'])){
            alert('请上传图片!','/Admin/carouselfigure',2);
        }
        if(!Input::hasFile('ad_code')){
            alert('图片地址不存在!','/Admin/carouselfigure',2);
        }
        //验证文件是否上传成功
        if(!Input::file('ad_code')->isValid()){
            alert('图片上传失败!','/Admin/carouselfigure',2);

        }
        $time = time();
        Input::file('ad_code')->move(base_path().'/public/Carouselfigure/','轮播图'.$time.'.png');
        $imgpath = '/Carouselfigure/轮播图'.$time.'.png';
        unset($arr['ad_code']);
        $arr['imgpath'] = $imgpath;

        $info =  DB::table('Carousel')->insert($arr);
        if ($info){
            alert('轮播图添加成功!!','/Admin/carouselfigure',1);
        }
        alert('轮播图添加失败!!','/Admin/carouselfigure',2);
    }
    public function carouselfigurechang(){
        $id = Input::get();
        $enabled['enabled'] = $id['enabled'] ? 0 : 1;
        $info =  DB::table('Carousel')->where(['id'=>$id['id']])->update($enabled);
        if ($info === false){
            return ['state' =>'error'];
        }
        return ['state' =>'success'];
    }

}
