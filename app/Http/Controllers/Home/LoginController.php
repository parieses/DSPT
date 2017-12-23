<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\session;

class LoginController extends Controller
{
    public function advise(){
        $arr = Input::get();
        unset($arr['_token']);
        $ls = DB::table('Advise')->insert($arr);
        if($ls === false){
            alert('提交失败!','/account',2);
        }
        alert('提交成功!','/login',1);

    }
    public function login()
    {
        $status =  $_SERVER['HTTP_REFERER'];
        session(['statuss'=>$status]);
        $Cominfo =  DB::table('Comtype')->get();
        return view('home.login')->with('Cominfo',get_make_tree($Cominfo));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function useradd(){
        $arr=Input::get();
        unset($arr['_token']);
        unset($arr['checkbox']);

        $arr['password'] = password_hash($arr['pwd'],PASSWORD_DEFAULT);
        unset($arr['pwd']);
        $students = DB::select('select * from DS_User where account  = '.$arr["account"]);
        if (!empty($students)){
            alert('该用户已存在!','/account',2);
        }
        $ls = DB::table('User')->insert($arr);
        if($ls === false){
            alert('注册失败!','/account',2);
        }
        alert('注册成功!','/login',1);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_login(Request $request)
    {

        $b = $request->all();
        //邮件正则
        $patternemail = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
        //手机号正则
        $patternphone ="/^1\d{2,3}-?\d{7,8}$/";
        $as = 'account';
        if (preg_match($patternemail,$b['account'])){
            $as = 'email';
        };
        if (preg_match($patternphone,$b['account'])){
            $as = 'Tel';
        };
        $user = DB::select('select * from DS_User where '.$as.' = ' . $b['account']);
        if (empty($user[0])) {
            alert('用户不存在','/login',2);
        }
        if (!password_verify($b['password'],$user[0]->password)){
            alert('密码不正确','/login',2);
        }
        session(array('user'=>$user[0]));

        $url = session('statuss');
        return Redirect($url);
    }

    public function logout(){
        session()->flush('user');
        return Redirect::to('/');
    }
}
