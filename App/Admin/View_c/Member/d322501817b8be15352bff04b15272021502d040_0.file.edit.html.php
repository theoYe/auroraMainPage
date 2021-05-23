<?php
/* Smarty version 3.1.33, created on 2019-08-05 10:12:37
  from 'P:\php\blog\App\Admin\View\Member\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d480115a4ad02_03756655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd322501817b8be15352bff04b15272021502d040' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Member\\edit.html',
      1 => 1564927114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d480115a4ad02_03756655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>成员管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加成员</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Admin&c=Member&a=dealEdit" enctype="multipart/form-data">
          <div class="form-group">
            <div class="label">
              <label for="sitename">成员名</label>
            </div>
            <div class="field">
              <input value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_name'];?>
" type="text" class="input" id="title" name="member_name" size="50" placeholder="请填写成员姓名" data-validate="required:请填写您的成员姓名" />
            </div>
          </div>
          <div class="form-group">
              <div class="label">
                <label for="sitename">QQ</label>
              </div>
              <div class="field">
                <input value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_qq'];?>
" type="text" class="input" id="title" name="member_qq" size="50" placeholder="请填写QQ,也可不填" />
              </div>
            </div>
            <div class="form-group">
                <div class="label">
                  <label for="sitename">微信</label>
                </div>
                <div class="field">
                  <input value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_wechat'];?>
" type="text" class="input" id="title" name="member_wechat" size="50" placeholder="请填写微信,也可不填" />
                </div>
              </div>
          <div class="form-group">
            <div class="label">
              <label for="logo">个人头像</label>
            </div>
            <div class="field"> <a class="button input-file" href="javascript:void(0);">上传文件
              <input size="100" type="file" name="member_profile" data-validate="regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" />
                <input type="hidden" name="member_profile_bak" value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_profile'];?>
">
            </a> </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">学号</label>
            </div>
            <div class="field">
              <input value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_number'];?>
" type="text" class="input" id="author" name="member_number" size="50" placeholder="请填写成员学号" data-validate="required:请填写成员学号" />
            </div>
          </div>
          <div class="form-group">
              <div class="label">
                <label for="sitename">邮箱</label>
              </div>
              <div class="field">
                <input value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_mail'];?>
" type="text" class="input" id="title" name="member_mail" size="50" placeholder="请填写邮箱，也可不填" />
              </div>
            </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所在组别</label>
            </div>
            <div class="field">
              <select class="select" name="group_id">
                <option value="1" <?php $_prefixVariable1 = 1;
$_tmp_array = isset($_smarty_tpl->tpl_vars['member_info']) ? $_smarty_tpl->tpl_vars['member_info']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['group_id'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('member_info', $_tmp_array);
if ($_prefixVariable1) {?>selected <?php }?> >二进制组</option>
                <option value="2" <?php $_prefixVariable2 = 2;
$_tmp_array = isset($_smarty_tpl->tpl_vars['member_info']) ? $_smarty_tpl->tpl_vars['member_info']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['group_id'] = $_prefixVariable2;
$_smarty_tpl->_assignInScope('member_info', $_tmp_array);
if ($_prefixVariable2) {?>selected <?php }?>>web组</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">手机号码</label>
            </div>
            <div class="field">
              <input type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_phone'];?>
" name="member_phone" id="" data-validate="length#<=12:手机号码长度小于等于12位" >
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">个人简介</label>
            </div>
            <div class="field">
              <textarea  name="member_desc" class="input" rows="5" cols="50" placeholder="请填写个人简介(少于200个字)" data-validate="required:请填写个人简介(少于200个字)"><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_desc'];?>
</textarea>
            </div>
    </div>
          <div class="form-button">
            <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['member_id'];?>
">
            <button name="submit" class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:30px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>


<?php echo '<script'; ?>
 src="/App/Admin/Public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

$(function(){
    $("#top-nav>li").eq(1).addClass('active').siblings().removeClass('active');
});

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:../Public/script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
