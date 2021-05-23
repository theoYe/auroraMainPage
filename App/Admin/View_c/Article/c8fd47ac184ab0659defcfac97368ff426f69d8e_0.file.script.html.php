<?php
/* Smarty version 3.1.33, created on 2019-08-04 05:48:40
  from 'P:\php\blog\App\Admin\View\Public\script.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4671b8ab52e1_36720292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8fd47ac184ab0659defcfac97368ff426f69d8e' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Public\\script.html',
      1 => 1564897652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4671b8ab52e1_36720292 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
$(function(){
    $('#top-nav>li').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('.side-bar>li').mouseover(function(){
        $(this).addClass('active').siblings().removeClass('active');
    }).mouseout(function(){
        $('.side-bar>li').removeClass('active');
    });
});


<?php echo '</script'; ?>
>
<?php }
}
