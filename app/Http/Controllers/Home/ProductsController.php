<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $idd = '';

        $Cominfo =  DB::table('Comtype')->get();
        $Cominfos =  DB::select('select * from DS_Comtype WHERE pid <> 0');
        $Color = DB::table('Color')->get();
        $Type = DB::table('Type')->get();
        if (!empty(Input::get('id'))){
            $List = DB::table('Comlist')->where(['货号'=>Input::get('id')])->get();
        }else{
            $List = DB::table('Comlist')->get();
        }
        $a = $b = '';
        $arr = [];
        foreach ($List as $v){
            if (!($v->货号 == $a) && !($v->商品名称 == $b)){
                $a = $v->货号;
                $b = $v->商品名称;
                $arr[] = $v;
            }
        }
        return view('home.products',compact('Cominfos'))->with('Cominfo',get_make_tree($Cominfo))->with('Color',$Color)->with('Type',$Type)->with('List',$arr);
    }
}
