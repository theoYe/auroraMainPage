<?php
/* Smarty version 3.1.33, created on 2019-07-26 08:31:48
  from 'P:\php\blog\v17\App\Test\View\Project\pro_v.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3aba74eb5004_76567866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceee22f119a83c897a1d0ef7a263092db44b95c3' => 
    array (
      0 => 'P:\\php\\blog\\v17\\App\\Test\\View\\Project\\pro_v.html',
      1 => 1564129684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3aba74eb5004_76567866 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>笑话名称</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['joke_list']->value, 'joke');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['joke']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['joke']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['joke']->value['type'];?>
</td>
                <td><input type="button" value="删除" onclick="location.href='/v17/index.php?a=remove&c=Project&id=<?php echo $_smarty_tpl->tpl_vars['joke']->value['id'];?>
';"></td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
    <p><a href="/v17/index.php?p=Test&c=Tea&a=list">查看教师列表</a></p>
        </tbody>
</body>
</html><?php }
}
