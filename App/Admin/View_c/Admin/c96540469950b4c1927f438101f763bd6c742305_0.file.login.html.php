<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:56:45
  from '/var/www/html/aurora/App/Admin/View/Admin/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d49871dba7520_85497828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96540469950b4c1927f438101f763bd6c742305' => 
    array (
      0 => '/var/www/html/aurora/App/Admin/View/Admin/login.html',
      1 => 1565098619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d49871dba7520_85497828 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>极光网安实验室后台登录</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo @constant('CSS_DIR');?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
respond.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
admin.js"><?php echo '</script'; ?>
>
    <link type="<?php echo @constant('IMAGES_DIR');?>
x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br /><br />
            <div class="media media-y">
                <a href="#" target="_blank"><img height="100px" src="<?php echo @constant('IMAGES_DIR');?>
logo.jpg" class="radius" alt="后台管理系统" /></a>
            </div>
            <br /><br />
            <form action="index.php?p=Admin&a=check" method="post">
            <div class="panel">
                <div class="panel-head"><strong>登录后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="admin_name" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求" />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="admin_pass" placeholder="登录密码" data-validate="required:请填写密码,length#>=8:密码长度不符合要求" />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                            <img src="index.php?p=Admin&c=Admin&a=captcha" alt="请点击刷新" onclick="this.src='index.php?p=Admin&c=Admin&a=captcha&n='+Math.random()" width="80" height="32" class="passcode">
                         
                            <!-- <img src="<?php echo @constant('IMAGES_DIR');?>
passcode.jpg" width="80" height="32" class="passcode" /> -->
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center"><button class="button button-block bg-main text-big">立即登录后台</button></div>
            </div>
            <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
