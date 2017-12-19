<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\session;

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
        $users = DB::select('select * from DS_Admin where number = '.$data['username']);
        if (empty($users)){
            alert('用户名不存在!','/Admin/login','2');
        }
        if (!password_verify($data['pwd'],$users[0]->pwd)){
            alert('密码错误!','/Admin/login','2');
        }
        session(array('user_info'=>$users[0]));
        DB::update('update DS_Admin set Ip = "'.$_SERVER['REMOTE_ADDR'].'" where number ='.$data['username']);
        return Redirect::to('/Admin/index');
    }
    public function logout(){
        session()->flush();
        return Redirect::to('/Admin/login');
    }
}
