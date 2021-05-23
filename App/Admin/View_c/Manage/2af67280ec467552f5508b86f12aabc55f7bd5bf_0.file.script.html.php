<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:02:38
  from '/var/www/html/aurora/App/Admin/View/Public/script.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d497a6e94ff58_39783814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af67280ec467552f5508b86f12aabc55f7bd5bf' => 
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
function content_5d497a6e94ff58_39783814 (Smarty_Internal_Template $_smarty_tpl) {
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
