<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/21
 * Time: 22:58
 */
return array(
    //数据库配置
    'DB_HOST' =>  '127.0.0.1', //数据库服务器地址
    'DB_USER' =>  'root',//数据库连接用户
    'DB_PWD' =>  '123',
    'DB_NAME' =>  'weibo',
    'DB_PREFIX' => 'hd_',//数据库前缀


    'DEFAULT_THEME' => 'default', //默认主题

    'URL_MODEL' => 1,

    'TOKEN_ON' => false,	//关闭令牌功能

    'ENCRYPTION_KET' => '122121102.',
    'AUTO_LOGIN_TIME' => time() + 3600 * 24 * 7,
);


?>