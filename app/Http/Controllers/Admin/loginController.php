<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
class loginController extends Controller
{
    public function login(){
        $data = Input::get();
        $arr=['_token'=>'登录环境不安全','username'=>'用户名不能为空','pwd'=>'密码不能为空'];
        foreach ($data as $k=>$v){
            if(empty($v)){
                alert($arr[$k],'/Admin/login','2');
            }
        }
        print_r(password_hash('admin',PASSWORD_DEFAULT));
    }
}
