<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;



class commoditylistController extends Controller
{

    public function index()
    {
        if (empty(session('user_info'))){
        alert('请登录!','/Admin/login','2');
        }
        $user = session('user_info');
        $results = DB::table('Comlist')->paginate(10);
        $comtypes = DB::table('Comtype')->get();
        return View('commoditylist',compact('results'))->with('user',$user)->with('comtypes',$comtypes);
    }
    function Comlists(){
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
        $ls = DB::select('select * from DS_Comtype where pid <>0');
        $user = session('user_info');
        $color = DB::select('select * from DS_Color ');
        $type = DB::select('select * from DS_Type ');
        return view('commodityadd',compact('ls'))->with('user',$user)->with('color',$color)->with('type',$type);
    }

    /**
     * 商品分类添加
     */
    public function classsave(Request $request, Response $response){
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
        $data = Input::get();
        parse_str($data['form'], $data);
        unset($data['_token']);
        $id = DB::select('select typename from DS_Comtype where id = "'.$data["pid"].'"');
        $data["typename"] = $id[0]->typename.$data["typename"];
        $ls = DB::select('select * from DS_Comtype where typename = "'.$data["typename"].'"');
        if(!empty($ls)){
            return ['status'=>-1,'msg'=>'分类名称存在!'];
        }
        $insert = DB::table("Comtype")->insert($data);
        if ($insert === false){
            return ['status'=>-1,'msg'=>'添加失败!'];
        } else{
            return ['status'=>1,'msg'=>'添加成功!'];
        }
    }

    /**
     * @return $this
     * 商品分类展示
     */
    public function typelist(){
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
        $pid = DB::select('select id,typename from DS_Comtype where pid = 0');
        $user = session('user_info');
        return view('commodityclassificationadd',compact('pid'))->with('user',$user);
    }

    /**
     *商品分类添加展示
     */
    public function lists(){
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
        $list = DB::select('select * from DS_Comtype ');
        $lists = get_make_tree($list);
//        dd($lists);
        $user = session('user_info');
        return view('commodityclassification',compact('lists'))->with('user',$user);
    }

    /**
     * 商品添加
     */
    public function Comadd(){
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
        $data = Input::all();
        unset($data['_token']);
        foreach ($data as $k=>$v){
            if (empty($v)){
                $msg = $k.' 不能为空!';
                alert($msg,'/Admin/commodityadd',2);
            }
        }
        if (!isset($data['图片'])){
            alert('请上传图片!','/Admin/commodityadd',2);
        }
        if(!Input::hasFile('图片')){
            alert('图片地址不存在!','/Admin/commodityadd',2);
        }
        //验证文件是否上传成功
        if(!Input::file('图片')->isValid()){
            alert('图片上传失败!','/Admin/commodityadd',2);
        }
        $map['衣服型号'] = $data['衣服型号'];
        $map['衣服颜色']= $data['衣服颜色'];
        $map['货号']= $data['货号'];
        $map['商品名称']=$data['商品名称'];
        $ls =  DB::table('Comlist')->where($map)->get();
        if (!empty($ls)){
            alert('该服装已存在!','/Admin/commodityadd',2);
        }
        Input::file('图片')->move(base_path().'/public/commodity/','商品'.time().'.png');
        $imgpath = '/commodity/商品'.time().'.png';
        unset($data['图片']);
        $data['图片地址'] = $imgpath;
        $data['商品标识'] = time();
        $info =  DB::table('Comlist')->insert($data);
        if ($info){
            alert('商品添加成功!!','/Admin/commoditylist',1);
        }
        alert('商品添加成功!!','/Admin/commodityadd',2);
    }
    public function commodityinquire()
    {
        if (empty(session('user_info'))) {
            alert('请登录!', '/Admin/login', '2');
        }
        $result = Input::get();
        if (!$result['cat_id']){
            alert('请选择分类!','/Admin/commoditylist',2);
        }
        $user = session('user_info');
        unset($result['review_status']);
        unset($result['review_token']);
        $results = DB::select('select * from DS_Comlist where 货号 ='.$result['cat_id'] .' and 商品名称 like "%'.$result['keywords'].'%"');
        $comtypes = DB::table('Comtype')->get();
        return View('commoditylist',compact('results'))->with('user',$user)->with('comtypes',$comtypes);;
    }

    public function update(){
        $arr = Input::get();
//        print_r($arr);exit;
        if ($arr['status'] == 1){
            $arr['status'] = 0;
            unset($arr['_token']);
            $result = DB::table('Comlist')
                ->where('id', $arr['id'])
                ->update([$arr['title'] => $arr['status']]);
            unset($arr);
            if ($result === 1){
                return ['result'=>$result];
            }else{
                return ['result'=>'更新失败!'];
            }
        }else{
            $arr['status'] = 1;
            unset($arr['_token']);
            $result = DB::table('Comlist')
                ->where('id', $arr['id'])
                ->update([$arr['title'] => $arr['status']]);
            unset($arr);
            if ($result === 1){
                return ['result'=>$result];
            }else{
                return ['result'=>'更新失败!'];
            }
        }
    }
    public function delete(){
        $arr = Input::get();
        $arr = rtrim($arr['id'],',');
        $result = DB::delete('delete from DS_Comlist where id in ('.$arr.')');
        if ($result !== 0){
            return ['result'=>$result];
        }else{
            return ['result'=>'更新失败!'];
        }
    }
}
