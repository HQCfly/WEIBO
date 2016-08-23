<?php
/**
 * Created by PhpStorm.
 * User: zyf
 * Date: 2016/8/23
 * Time: 17:49
 */
//公用控制器
Class CommonAction extends Action{
    //自动运行方法
    Public function  _initialize(){
        //处理自动登录
        if (isset($_COOKIE['auto'])&&!isset($_SESSION['uid'])){
            $value=explode('|',encryption($_COOKIE['auto'],1));
            $ip=get_client_ip();
            //本次登录ip与上次ip一致时
            if($ip==$value[1]){
                $account=$value[0];
                $where=array('account'=>$account);
                $user=M('user')->where($where)->field(array('id','lock'))->find();
                //检索出用户信息并且该用户没有被锁时登录
                if ($user&&!$user['lock']){
                    session('uid',$user['id']);
                }
            }
        }
        //判断用户是否已登录
        if (!isset($_SESSION['uid'])){
            redirect(U('Login/index'));
        }
    }
}