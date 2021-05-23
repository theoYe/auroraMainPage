<?php

/**
 * 分类控制器类
 */
class CategoryController extends PlatformController{
    public function indexAction(){
        $category = Factory::M('CategoryModel');
        $cateinfo = $category->getCategory();
        $this->assign('cateinfo',$cateinfo);
        
        $this->display('index.html');
    }   
    public function addAction(){
        $category = Factory::M('CategoryModel');
        $cateinfo = $category->getCategory();
        $this->assign('cateinfo',$cateinfo);
        $this->display('add.html');
    }
    public function getPost(){
        $cate = array();
        $cate['cate_name'] = $this->escapeData($_POST['cate_name']);
        $cate['cate_pid'] = $this->escapeData($_POST['cate_pid']);
        $cate['cate_sort'] = $this->escapeData($_POST['cate_sort']);
        $cate['cate_desc'] = $this->escapeData($_POST['cate_desc']);

        return $cate;
    }

    public function dealAddAction(){
        $cate = $this->getPost();
        if(empty($cate['cate_name']) || empty($cate['cate_sort']) || empty($cate['cate_sort'])|| empty($cate['cate_desc']))
        {
            $this->jump('index.php?p=Admin&c=Category&a=add',':( 您填写的信息不完整，请重新尝试');
            return false;
        }
        if(!is_numeric($cate['cate_sort'])){
            $this->jump('index.php?p=Admin&c=Category&a=add',':( 排序编号必须为整型');
            return false;
        }
        $category = Factory::M('CategoryModel');

        $result = $category->insertCate($cate);
        if($result){
            $this->jump('index.php?p=Admin&c=Category&a=index','添加成功');
            return true;
        }else {
            //失败则报错
            $this->jump('index.php?p=Admin&c=Category&a=add','添加分类失败');
            return false;
        }
    }

    public function delAction(){
        $category = Factory::M('CategoryModel');
        $cate_id = $this->escapeData($_GET['cate_id']);
        $result = $category->delCate($cate_id);
        if($result){
            $this->jump('index.php?p=Admin&c=Category&a=index');
        }else{
            $this->jump('index.php?p=Admin&c=Category&a=index',':(删除失败，请重新尝试');
        }
    }

    public function editAction(){
        $category = Factory::M('CategoryModel');
        $cate_id = $this->escapeData($_GET['cate_id']);
        $cateinfo = $category->getCategory();
        $cateitem = $category->getCategory($cate_id);
        $this->assign('cateinfo',$cateinfo);
        $this->assign('cateitem',$cateitem);
        $this->display('edit.html');
    }
    public function updateAction(){
        $cate = $this->getPost();
        $cate_id = $this->escapeData($_GET['cate_id']);
        if(empty($cate['cate_name']) || empty($cate['cate_sort']) || empty($cate['cate_sort'])|| empty($cate['cate_desc']))
        {
            $this->jump('index.php?p=Admin&c=Category&a=edit',':( 您填写的信息不完整，请重新尝试');
            return false;
        }
        if(!is_numeric($cate['cate_sort'])){
            $this->jump('index.php?p=Admin&c=Category&a=edit',':( 排序编号必须为整型');
            return false;
        }
        $category = Factory::M('CategoryModel');
        $result = $category->updateCate($cate,$cate_id);
        if($result){
            $this->jump('index.php?p=Admin&c=Category&a=index',':)更改成功');
            return true;
        }else {
            //失败则报错
            $this->jump("index.php?p=Admin&c=Category&a=edit&cate_id=$cate_id",':(更改失败');
            return false;
        }
    }
}

