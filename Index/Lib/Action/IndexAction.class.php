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
    Public function loginout(){
        echo 11;
    }
}

