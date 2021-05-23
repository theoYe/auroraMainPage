<?php
/* Smarty version 3.1.33, created on 2019-08-06 21:02:40
  from '/var/www/html/aurora/App/Admin/View/Manage/manage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d497a70bd9c02_57187785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80c4ea68e527f338aa8e60bd6b22bf6b007327b6' => 
    array (
      0 => '/var/www/html/aurora/App/Admin/View/Manage/manage.html',
      1 => 1564931216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d497a70bd9c02_57187785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>站点首页管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">首页显示成员</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Admin&c=Manage&a=dealIndexManage" enctype="multipart/form-data">
          <div class="form-group">
            <div class="label">
              <label for="sitename">第一成员</label>
            </div>
            <div class="field">
              <select class="select" name="member_id[]" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membersInfo']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['member_onindex'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="label">
              <label for="siteurl">第二成员</label>
            </div>
            <div class="field">
                <select class="select" name="member_id[]" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membersInfo']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['member_onindex'] == '2') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
          </div>

          <div class="form-group">
            <div class="label">
              <label for="readme">第三成员</label>
            </div>
            <div class="field">
                <select class="select" name="member_id[]">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membersInfo']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['member_onindex'] == '3') {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
            </div>
          </div>

          <div class="form-button">
            <button name="submit" class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:40px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:../Public/script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>

    $(function(){
        $("#top-nav>li").eq(0).addClass('active').siblings().removeClass('active');
    });
    
    <?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
