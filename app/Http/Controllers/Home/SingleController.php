<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single()
    {
        $arr['货号'] = Input::get('cid');
        $arr['商品名称'] = Input::get('cname');
        $info = DB::select('select 衣服型号,衣服颜色,商品标识,价格 from  DS_Comlist where(货号='.$arr['货号'].' and 商品名称="'.$arr['商品名称'].'")');
        $infos = [];
        foreach ($info as $k=>$v){
            $a = DB::table('Color')->where(['id'=>$v->衣服颜色])->get();
            $b = DB::table('Type')->where(['id'=>$v->衣服型号])->get();
            $infos[$k][] = $a[0];
            $infos[$k][]= $b[0];
            $infos[$k][]= $v->商品标识;
        }
        $money =$info[0]->价格;
        if (!empty(Input::get('id'))){
            $money = DB::table('Comlist')->where(['商品标识'=>Input::get('id')])->get()[0]->价格;
        }
        $Cominfo =  DB::table('Comtype')->get();
        return view('home.single')->with('Cominfo',get_make_tree($Cominfo))->with('infos',$infos)->with('name',$arr)->with('money',$money);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
