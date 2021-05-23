<?php
/* Smarty version 3.1.33, created on 2019-08-04 12:58:01
  from 'P:\php\blog\App\Admin\View\Public\script.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46d659691f18_08789303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47c215f10ab0dac224862678c7628fb86cb3fc5' => 
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
function content_5d46d659691f18_08789303 (Smarty_Internal_Template $_smarty_tpl) {
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
