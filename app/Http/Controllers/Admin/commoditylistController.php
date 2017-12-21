<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use function MongoDB\BSON\fromJSON;

class commoditylistController extends Controller
{

    public function index()
    {
        if (empty(session('user_info'))){
        alert('请登录!','/Admin/login','2');
        }
        $user = session('user_info');
        return View('commoditylist')->with('user',$user);
    }

    /**
     * 商品分类添加
     */
    public function classsave(Request $request, Response $response){
        $data = Input::get();
        parse_str($data['form'], $data);
        foreach ($data as $v){
            if ($v == ''){
                return ['code'=>-1];
            }
        }


//        dd($data);
    }
}
