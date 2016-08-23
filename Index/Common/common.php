<?php
/**
 * Created by PhpStorm.
 * User: zyf
 * Date: 2016/8/23
 * Time: 17:20
 */
//打印数组
function p ($arr){
    echo '<pre>';
    print_r($arr);
    echo  '</pre>';
}
//异位或加密字符串$value需要加密的字符串$type 0是加密1是解密
function encryption($value,$type=0){
    $key=md5(C('ENCRYPTION_KEY'));
    if (!$type){
        return str_replace('=','',base64_encode($value^$key));
    }
}