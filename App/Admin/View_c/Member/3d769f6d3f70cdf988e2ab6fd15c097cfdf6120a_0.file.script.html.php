<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:02:42
  from '/var/www/html/aurora/App/Admin/View/Public/script.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d497a721a8892_32624741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d769f6d3f70cdf988e2ab6fd15c097cfdf6120a' => 
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
function content_5d497a721a8892_32624741 (Smarty_Internal_Template $_smarty_tpl) {
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
