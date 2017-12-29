<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

class commentController extends Controller
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
        $comment = DB::select('select * from DS_Comment');
        $user = session('user_info');
        return View('comment')->with('comment',$comment)->with('user',$user);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $data = Input::get();
        $user = $data['user'];
        $users = DB::select('select * from DS_Comment where user = "'.$user.'"');
        if (empty($users)){
            alert('用户名不存在!','/Admin/comment','2');
        }
        $user = session('user_info');
        return View('comment')->with('comment',$users)->with('user',$user);
    }


}
