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
        return View('commoditylist')->with('user',$user);
    }
    function Comlists(){
        if (empty(session('user_info'))){
            alert('请登录!','/Admin/login','2');
        }
        $ls = DB::select('select * from DS_Comtype where pid <>0');
        $lss = DB::select('select * from DS_Type');
        $color = DB::select('select * from DS_Color');
        $user = session('user_info');
        return view('commodityadd',compact('ls'))->with('user',$user)->with('type',$lss)->with('color',$color);
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
        alert('商品添加失败!!','/Admin/commodityadd',2);
    }

}
