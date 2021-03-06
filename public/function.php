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
            $packData[$v->pid]->child[] =&$packData[$k];
        }
    }
    return $tree;
}
function GetIp(){
    $realip = '';
    $unknown = 'unknown';
    if (isset($_SERVER)){
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach($arr as $ip){
                $ip = trim($ip);
                if ($ip != 'unknown'){
                    $realip = $ip;
                    break;
                }
            }
        }else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){
            $realip = $_SERVER['REMOTE_ADDR'];
        }else{
            $realip = $unknown;
        }
    }else{
        if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        }else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){
            $realip = getenv("HTTP_CLIENT_IP");
        }else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){
            $realip = getenv("REMOTE_ADDR");
        }else{
            $realip = $unknown;
        }
    }
    $realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;
    return $realip;
}

function GetIpLookup($ip = ''){
    if(empty($ip)){
        $ip = GetIp();
    }
    $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
    if(empty($res)){ return false; }
    $jsonMatches = array();
    preg_match('#\{.+?\}#', $res, $jsonMatches);
    if(!isset($jsonMatches[0])){ return false; }
    $json = json_decode($jsonMatches[0], true);
    if(isset($json['ret']) && $json['ret'] == 1){
        $json['ip'] = $ip;
        unset($json['ret']);
    }else{
        return false;
    }
    return $json;
}
function make_directory($ftp_stream, $dir){
    // if directory already exists or can be immediately created return true
    if ($this->ftp_is_dir($ftp_stream, $dir) || @ftp_mkdir($ftp_stream, $dir)) return true;
    // otherwise recursively try to make the directory
    if (!$this->make_directory($ftp_stream, dirname($dir))) return false;
    // final step to create the directory
    return ftp_mkdir($ftp_stream, $dir);
}

function ftp_is_dir($ftp_stream, $dir){
    // get current directory
    $original_directory = ftp_pwd($ftp_stream);
    // test if you can change directory to $dir
    // suppress errors in case $dir is not a file or not a directory
    if ( @ftp_chdir( $ftp_stream, $dir ) ) {
        // If it is a directory, then change the directory back to the original directory
        ftp_chdir( $ftp_stream, $original_directory );
        return true;
    } else {
        return false;
    }
}