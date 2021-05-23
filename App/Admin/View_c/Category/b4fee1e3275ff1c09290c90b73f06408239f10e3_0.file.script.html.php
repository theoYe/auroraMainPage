<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:08:31
  from '/var/www/html/aurora/App/Admin/View/Public/script.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d497bcf79cc57_27799389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4fee1e3275ff1c09290c90b73f06408239f10e3' => 
    array (
      0 => '/var/www/html/aurora/App/Admin/View/Public/script.html',
      1 => 1564897654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d497bcf79cc57_27799389 (Smarty_Internal_Template $_smarty_tpl) {
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
