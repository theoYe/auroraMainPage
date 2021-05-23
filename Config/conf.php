<?php
return [
    'database' =>array(  //数据库配置信息
        'host'=>'localhost',
        'port'=>'3306',
        'user'=> 'root',
        'pass'=> 'bat15260734452',
        'charset'=> 'utf8',
        'dbname'=>'blog'
    ),
    'App' =>array( //应用程序配置信息
        'default_platform' =>'Home',
        'dao'   =>'PDODB'    //choose PDODB or MySQLDB
    ),
    'Home'=>array(   //前台配置信息
        'default_controller' =>'Index',
        'default_action'    =>'index' 
    ),
    'Admin'=>array(   //后台配置信息
        'default_controller' =>'Admin',
        'default_action'    =>'login' 
    ),
    'Test'=>array(   //测试配置信息
    ),
    'Captcha'   => array(  //验证码信息组
        'width' => 80,
        'height'=> 32,
        'pixelnum'=>0.03,  //干扰点密度
        'linenum'=>3,   //干扰线数量
        'stringnum'=>4 //字符个数
    ),
    "Page"=>array(
        'rowsPerPage'=>10,//每页显示的记录数,
        'maxNum'=>5  //页面上能显示的最多有多少个页面
    )//其他
];
