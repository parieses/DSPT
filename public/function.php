<?php
/**
 * Created by PhpStorm.
 * User: qingyun
 * Date: 2017/12/18
 * Time: 下午3:32
 */
function alert($msg,$url,$icon){
    echo '<script src="'.'/static/jquery.min.js"></script><script src="/layer/layer.js"></script><script>layer.msg("'.$msg.'", {icon: '.$icon.'},function(){
    location.href="'.$url.'";
});</script>';
    exit;
}
function get_make_tree($list,$pid = 'pid',$id = 'id',$child = 'child',$root = 0){
    $packData = $tree = [];
    foreach ($list as $data){
        $packData[$data->id] = $data;
    }
    unset($list);
    foreach ($packData as $k=>$v) {
        if($v->pid == $root ){
            $tree[] = &$packData[$k];
        }
        else{
            $packData[$v->pid]->$child[] =&$packData[$k];
        }
    }
    return $tree;
}