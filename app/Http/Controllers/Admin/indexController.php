<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class indexController extends Controller
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
       $info =  DB::table('Log')->get();
       return View('index',compact('info'))->with('user',$user);
    }




}
