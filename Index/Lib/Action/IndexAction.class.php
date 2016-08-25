<?php
/**
 * Created by PhpStorm.
 * User: zyf
 * Date: 2016/8/23
 * Time: 17:47
 */
//首页控制器
Class IndexAction extends CommonAction{
    //首页视图
    Public function index(){
        $this->display();
    }
    //退出登录处理
    Public function loginOut () {
        //卸载SESSION
        session_unset();
        session_destroy();

        //删除用于自动登录的COOKIE
        @setcookie('auto', '', time() - 3600, '/');

        //跳转致登录页
        redirect(U('Login/index'));
    }
}

