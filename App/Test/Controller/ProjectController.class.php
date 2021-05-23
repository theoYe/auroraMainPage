<?php
/**
 * 学生控制器
 */
 class ProjectController extends Controller{
     /**
      * 获取学生列表
      */
      public  function listAction(){
        $pro_m = Factory::M('ProjectModel');
        $joke_list = $pro_m->getList();
        $this->assign('joke_list',$joke_list);
        $this->display('pro_v.html');
      }

      public function removeAction(){
        $pro_m = Factory::M('ProjectModel');
       if($pro_m->removeJoke($_GET['id'])){
        $joke_list = $pro_m->getList();
        $this->assign('joke_list',$joke_list);
        $this->display('pro_v.html');
       }
      else
        die('删除失败');
      }
 }

