<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/21
 * Time: 23:08
 * 注册与登录控制器
 */
Class LoginAction extends Action{
//    登陆页面
    Public function index(){
        $this->display();

    }
//    这册页面
    Public function register(){
        $this->display();
    }
//    获取验证
    Public function verify () {
        import('ORG.Util.Image');
        Image::buildImageVerify(4, 1, 'png');
    }
}
?>
