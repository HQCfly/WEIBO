<?php
/**
 * Created by PhpStorm.
 * User: zyf
 * Date: 2016/8/25
 * Time: 18:49
 */
Class SearchAction extends CommonAction{
    //搜索人
    Public function sechUser(){
        $keyword=$this->_getKeyword();
        $this->keyword=$keyword;
        $this->display();
    }
    //返回搜索关键字
    Private function _getKeyword(){
        return $_GET['keyword']=='搜索微博/找人'?NULL:$this->_get('keyword');
    }
}