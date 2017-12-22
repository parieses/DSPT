<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.account');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        return view('home.account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function p_account(Request $request)
    {
        $from = $request->all();
        unset($from['checkbox']);
        unset($from['passwords']);
        $from['password'] = password_hash($from['password'],PASSWORD_DEFAULT);
//        dd($from);
       DB::insert('insert into  laravel-user(account,tel,email,password) values($from[phone], $from[email],$from[name],$from[password])');

    }

//    public function s_account(){
//        $qqqq = Input::get();
//        $qqqa = $qqqq['ss'];
//        dd($qqqa);
//    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
