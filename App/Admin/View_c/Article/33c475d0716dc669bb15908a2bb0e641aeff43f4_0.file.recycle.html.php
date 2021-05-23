<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:08:31
  from '/var/www/html/aurora/App/Admin/View/Article/recycle.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d497bcff2c212_04540116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c475d0716dc669bb15908a2bb0e641aeff43f4' => 
    array (
      0 => '/var/www/html/aurora/App/Admin/View/Article/recycle.html',
      1 => 1564898488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d497bcff2c212_04540116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
	<form action="index.php?p=Admin&c=Article&a=realDels" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="art_id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" />
            <input type="submit" class="button button-small border-yellow" id="plsc"  value="批量删除" />
            <a href="index.php?p=Admin&c=Article&a=recycle">
                    <input type="button" class="button button-small border-blue" value="回收站" />
            </a>
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="200">文章标题</th>
                <th width="120">点击率</th>
                <th width="180">发布时间</th>
                <th width="100">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artInfo']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td><input type="checkbox" name="art_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</td>
                <td>
                    <a class="button border-blue button-little" href="index.php?p=Admin&c=Article&a=recover&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
">还原</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Admin&c=Article&a=realDel&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" onclick="return confirm('确定删除吗')">删除</a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

		<div class="panel-foot text-center">
            <?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>



    <?php echo '<script'; ?>
>
        $(function(){
            $('#btnAdd').click(
                function(){
                    window.location.href  = 'index.php?p=Admin&c=Article&a=add';
                }
            );
        });
        $(function(){
    $('#top-nav>li').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
});

    <?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender('file:../Public/script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/article.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
