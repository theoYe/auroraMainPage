<?php
/* Smarty version 3.1.33, created on 2019-08-04 07:51:03
  from 'P:\php\blog\App\Admin\View\Category\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d468e671df6d8_81774885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f18e5b8a37beeb67a298693a2303fbf3492a6d' => 
    array (
      0 => 'P:\\php\\blog\\App\\Admin\\View\\Category\\add.html',
      1 => 1564897785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
    'file:../Public/script.html' => 1,
  ),
),false)) {
function content_5d468e671df6d8_81774885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
    <div class="tab">
      <div class="tab-head"> <strong>分类管理</strong>
        <ul class="tab-nav">
          <li class="active"><a href="#tab-set">添加分类</a></li>
        </ul>
      </div>
      <div class="tab-body"> <br />
        <div class="tab-panel active" id="tab-set">
          <form method="post" class="form-x" action="index.php?p=Admin&c=Category&a=dealAdd">
            <div class="form-group">
              <div class="label">
                <label for="sitename">分类名称</label>
              </div>
              <div class="field">
                <input type="text" class="input" id="name" name="cate_name" size="50" placeholder="分类名称" data-validate="required:请填写您的分类名称" />
              </div>
            </div>
            <div class="form-group">
              <div class="label">
                <label for="sitename">所属类别</label>
              </div>
              <div class="field">
                <select class="select" name="cate_pid">
                      <option value="0">主类别</option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cateinfo']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo preg_replace('!^!m',str_repeat('-',(5*$_smarty_tpl->tpl_vars['row']->value['level'])),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
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
                <label for="readme">分类描述</label>
              </div>
              <div class="field">
                <textarea class="input" name="cate_desc" rows="5" cols="50" placeholder="请填写分类描述" data-validate="required:请填写分类描述"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="label">
                <label for="siteurl">排序</label>
              </div>
              <div class="field">
                <input type="text" class="input" id="sort" name="cate_sort" size="50" placeholder="请填写排序编号" data-validate="required:请填写排序编号" />
              </div>
            </div>
            <div class="form-button">
              <button class="button bg-main" type="submit">提交</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div style='height:20px; border-bottom:1px #DDD solid'></div>
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
  </div>


  <?php $_smarty_tpl->_subTemplateRender('file:../Public/script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
/article.js"><?php echo '</script'; ?>
>
</body>
  </html><?php }
}
