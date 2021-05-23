<?php
/* Smarty version 3.1.33, created on 2019-08-04 14:48:48
  from 'P:\php\blog\App\Admin\View\Manage\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46f050f30b52_08148758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d95a8fbbf216c2bdd008357c8a778262d22ba07' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Manage\\index.html',
      1 => 1564930127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d46f050f30b52_08148758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="<?php echo @constant('IMAGES_DIR');?>
/face.jpg" width="120" class="radius-circle" /><br />
                    <?php echo $_SESSION['adminInfo']['admin_name'];?>

                </div>
                <div class="panel-foot bg-back border-back">您好，<?php echo $_SESSION['adminInfo']['admin_name'];?>
，您共登录了<?php echo $_SESSION['adminInfo']['login_count'];?>
次，上次登录为<?php echo $_SESSION['adminInfo']['login_time'];?>
。登录ip为<?php echo $_SESSION['adminInfo']['login_ip'];?>
</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                	<li><span class="float-right badge bg-red"><?php echo $_smarty_tpl->tpl_vars['memNum']->value;?>
</span><span class=""></span> 成员数量</li>
                    <li><span class="float-right badge bg-main"><?php echo $_smarty_tpl->tpl_vars['artNum']->value;?>
</span><span class=""></span> 文章数量</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
            <div class="alert">
                <div class="alert alert-yellow"><span class="close"></span><strong>提示：</strong>欢迎使用本后台管理系统！</div>
                <h4>Aurora</h4>
                <p class="text-gray padding-top">该后台系统基于PHP+mysql搭建</p>
            	<a target="_blank" class="button bg-dot " href="#">Ckeditor友情链接</a> 
            	<a target="_blank" class="button bg-main" href="#">CkFinder友情链接</a> 
            	<a target="_blank" class="button border-main" href="#">使用教程</a>
            </div>
            <div class="panel">
            	<div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr><th colspan="2">服务器信息</th><th colspan="2">系统信息</th></tr>
                    <tr><td width="110" align="right">操作系统：</td><td><?php echo @constant('PHP_OS');?>
</td><td width="90" align="right">系统开发：</td><td><a href="#" target="_blank">MVC设计思想</a></td></tr>
                    <tr><td align="right">Web服务器：</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?>
</td><td align="right">主页：</td><td><a href="#" target="_blank">#</a></td></tr>
                    <tr><td align="right">服务器IP：</td><td><?php echo $_SERVER['SERVER_ADDR'];?>
</td><td align="right">演示：</td><td><a href="#" target="_blank">http://www.blog.com</a></td></tr>
                    <tr><td align="right">数据库：</td><td>MySQL</td><td align="right">群交流：</td><td><a href="#" target="_blank">#</a> (点击加入)</td></tr>
                </table>
            </div>
        </div>
    </div>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建   来源:<a href="http://www.itcast.cn/" target="_blank"></a></p>
</div>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/index.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:../Public/script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
$(function(){
    $("#top-nav>li").eq(0).addClass('active').siblings().removeClass('active');
});
<?php echo '</script'; ?>
>



</body>
</html><?php }
}
