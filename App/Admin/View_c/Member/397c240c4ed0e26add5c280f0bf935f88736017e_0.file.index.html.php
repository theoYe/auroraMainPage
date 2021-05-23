<?php
/* Smarty version 3.1.33, created on 2019-08-04 14:21:50
  from 'P:\php\blog\App\Admin\View\Member\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46e9fe7bd996_97993336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397c240c4ed0e26add5c280f0bf935f88736017e' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Member\\index.html',
      1 => 1564928510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d46e9fe7bd996_97993336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
	<form action="index.php?p=Admin&c=Member&a=delAll" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>成员列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="member_id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加成员" />
            <input type="submit" class="button button-small border-yellow" id="plsc"  value="批量删除" / onclick="return confirm('确定删除吗');">
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">成员名</th>
                <th width="200">成员组别</th>
                <th width="120">成员手机号码</th>
                <th width="120">成员学号</th>
                <th width="180">是否在主页上</th>
                <th width="100">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['member_list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td><input type="checkbox" name="member_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_number'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['row']->value['member_onindex'] == '0') {?>否<?php } else { ?>是<?php }?></td>
                <td>
                    <a class="button border-blue button-little" href="index.php?p=Admin&c=Member&a=edit&member_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Admin&c=Member&a=del&member_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
" >删除</a>
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
                    window.location.href  = 'index.php?p=Admin&c=Member&a=add'
                }
            );
        });
        $(function(){
    $("#top-nav>li").eq(1).addClass('active').siblings().removeClass('active');
});
    <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:../Public/script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
