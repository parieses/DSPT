<?php
/**
 * Created by PhpStorm.
 * User: qingyun
 * Date: 2017/12/18
 * Time: 下午3:32
 */
function alert($msg,$url,$icon){
    echo '<script src="'.'http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script><script src="/layer/layer.js"></script><script>layer.msg("'.$msg.'", {icon: '.$icon.'},function(){
    location.href="'.$url.'";
});</script>';
}