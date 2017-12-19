<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class userController extends Controller
{
    public function save(){
        $data = Input::get();
        $arr = [];
       foreach ($data as $k=>$v){
           if ($k != '_token'){
               $arr[$k]  = $v;
           }
       }
       $updata =  DB::update('update DS_Admin set name ="'.$arr['name'].'",nickname = "'.$arr['nick_name'].'",introduce = "'.$arr['introduction'].'" where number = '.$arr['user_ident']);
        var_dump($updata);

    }
}
