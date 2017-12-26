<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class InformationController extends Controller
{

    public function information (){

        $Cominfo =  DB::table('Comtype')->get();
        $Address =  DB::table('Address')->where('uid', session('user')->id)->get();
        $session =  DB::table('User')->where('id', session('user')->id)->get();
        return view('home.information')->with('Cominfo',get_make_tree($Cominfo))->with('Address',$Address)->with('session',$session[0]);

    }
    public function address(){
        $arr =  Input::get();
        $arr['uid'] =session('user')->id;
        $arr['region']=$arr['s_province'].$arr['s_city'].$arr['s_county'];
        unset($arr['_token']);
        unset($arr['s_province']);
        unset($arr['s_city']);
        unset($arr['s_county']);
//        dd($arr);
        $ls = DB::table('Address')->insert($arr);
        if($ls === false){
            alert('提交失败!','/information',2);
        }
        alert('提交成功!','/information',1);
    }
    public function changpwd(){
        $pwd=session('user')->password;
        $data = Input::get();
        unset($data['_token']);
        if ($data['awardDescription'] != $data['awardDescription1']){
            return ['code'=>-1,'msg'=>'两次密码不一样QaQ！'];
        }
        if (!password_verify($data['awardName'],$pwd)){
            return ['code'=>-1,'msg'=>'旧密码不正确QaQ！'];
        }
        $arr['password']= password_hash($data['awardDescription'],PASSWORD_DEFAULT);
        $info = DB::table('User')->where(['id'=>$data['uid']])->update($arr);
        if ($info === false){
            return ['code'=>-1,'msg'=>'修改密码失败！'];
        }
        session()->forget('user');
        return ['code'=>1,'msg'=>'修改密码成功！'];

    }
    public function new_User(){
        $data = Input::get();
        unset($data['_token']);
        $info = DB::table('User')->update($data);
        if($info === false){
            return ['code'=>-1,'msg'=>'修改资料失败！'];
        }
        return ['code'=>1,'msg'=>'修改资料成功'];
    }

}
