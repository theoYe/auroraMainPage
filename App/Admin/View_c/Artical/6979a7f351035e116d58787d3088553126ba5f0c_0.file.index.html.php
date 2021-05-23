<?php
/* Smarty version 3.1.33, created on 2019-08-01 16:00:32
  from 'P:\php\blog\App\Admin\View\Artical\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d430ca058dac3_14255992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6979a7f351035e116d58787d3088553126ba5f0c' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Artical\\index.html',
      1 => 1564675225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_5d430ca058dac3_14255992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
	<form action="#" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" />
            <input type="submit" class="button button-small border-yellow"  value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
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
            <tr>
                <td><input type="checkbox" name="id[]" value="" /></td>
                <td>0</td>
                <td>程序人生</td>
                <td>88</td>
                <td>2016-10-10</td>
                <td>
                    <a class="button border-blue button-little" href="#">修改</a> 
                    <a class="button border-yellow button-little" href="#" >删除</a>
                </td>
            </tr>
        </table>
		<div class="panel-foot text-center">
            <a href="#"><<上一页</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">下一页>></a>
			总页数：5
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
                    window.location.href  = 'index.php?p=Admin&c=Artical&a=add'
                }
            );
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
