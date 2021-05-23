<?php
/* Smarty version 3.1.33, created on 2019-08-04 09:20:41
  from 'P:\php\blog\App\Admin\View\Member\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46a369a67997_23471351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb6db7b234a1c9a630fb0433ad85494cb3f2c6e9' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Member\\add.html',
      1 => 1564909850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d46a369a67997_23471351 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="POST" class="form-x" action="index.php?p=Admin&c=Member&a=dealAdd" enctype="multipart/form-data">
          <div class="form-group">
            <div class="label">
              <label for="sitename">成员名</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="member_name" size="50" placeholder="请填写成员姓名" data-validate="required:请填写您的成员姓名" />
            </div>
          </div>
          <div class="form-group">
              <div class="label">
                <label for="sitename">QQ</label>
              </div>
              <div class="field">
                <input type="text" class="input" id="title" name="member_qq" size="50" placeholder="请填写QQ,也可不填" />
              </div>
            </div>
            <div class="form-group">
                <div class="label">
                  <label for="sitename">微信</label>
                </div>
                <div class="field">
                  <input type="text" class="input" id="title" name="member_wechat" size="50" placeholder="请填写微信,也可不填" />
                </div>
              </div>
          <div class="form-group">
            <div class="label">
              <label for="logo">个人头像</label>
            </div>
            <div class="field"> <a class="button input-file" href="javascript:void(0);">上传文件
              <input size="100" type="file" name="member_profile" data-validate="required:请选择上传文件,regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" />
              </a> </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">学号</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="author" name="member_number" size="50" placeholder="请填写成员学号" data-validate="required:请填写成员学号" />
            </div>
          </div>
          <div class="form-group">
              <div class="label">
                <label for="sitename">邮箱</label>
              </div>
              <div class="field">
                <input type="text" class="input" id="title" name="member_mail" size="50" placeholder="请填写邮箱，也可不填" />
              </div>
            </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所在组别</label>
            </div>
            <div class="field">
              <select class="select" name="group_id">
                <option value="1">二进制组</option>
                <option value="2">web组</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">手机号码</label>
            </div>
            <div class="field">
              <textarea name="member_phone" class="input" rows="1" cols="50" placeholder="请填写手机号码" data-validate="required:请填写手机号码"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">个人简介</label>
            </div>
            <div class="field">
              <textarea name="member_desc" class="input" rows="5" cols="50" placeholder="请填写个人简介(少于200个字)" data-validate="required:请填写个人简介(少于200个字)"></textarea>
            </div>
    </div>
          <div class="form-button">
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
