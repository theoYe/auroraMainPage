<?php
/* Smarty version 3.1.33, created on 2019-08-05 10:12:34
  from 'P:\php\blog\App\Admin\View\Public\public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d480112b269e1_56740523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bfe63f3d40803ebed005e6e6df392177089bbce' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Public\\public.html',
      1 => 1564930661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d480112b269e1_56740523 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>个人博客后台管理系统</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
/pintuer.css">
    <link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/respond.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img height="40px" src="<?php echo @constant('IMAGES_DIR');?>
/logo.jpg" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="index.php?p=Admin&c=Admin&a=logout">注销登录</a>
            </span>
            <ul id="top-nav" class="nav nav-inline admin-nav">
                <li class=""><a href="javascript:;" class="icon-home"><i class="fa fa-site"></i>站点管理</a>
                    <ul class="side-bar">
                            <li>
                                <a href="index.php?p=Admin&c=Manage&a=index">站点信息统计</a>
                            </li>
                            <li>
                                <a href="index.php?p=Admin&c=Manage&a=indexManage">站点首页管理</a>
                            </li>
                    </ul>
                </li>
                <li><a href="javascript:;"> <i class="fa fa-user-o"></i> 成员管理</a>
            		<ul class="side-bar"><li><a href="index.php?p=Admin&c=Member&a=index">所有成员</a></li><li><a href="index.php?p=Admin&c=Member&a=add">添加成员</a></li></ul>
                </li>
                <li><a href="javascript:;" class="icon-file-text">文章管理</a>
					<ul class="side-bar"><li><a href="index.php?p=Admin&c=Article&a=index">所有文章</a></li><li class=""><a href="index.php?p=Admin&c=Article&a=add">添加文章</a></li><li><a href="index.php?p=Admin&c=Category&a=index">分类设置</a></li><li><a href="index.php?p=Admin&c=Article&a=recycle">回收站</a></li></ul>
                </li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['adminInfo']['admin_name'];?>
，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.php?p=Admin&c=Manage&a=index" class=""> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>







<?php }
}
