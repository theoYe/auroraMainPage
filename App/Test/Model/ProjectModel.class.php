<?php

/**
 * project 表数据模型
 * 
 */

 class ProjectModel extends Model{
    /**
      * 获得所有的笑话项目
      */
      public function getList(){

          $sql = 'select * from jokes';
          return  $this->dao->fetchAll($sql);
      }
      public function removeJoke($id){
        $sql = "delete from jokes where id = {$id}";
           return  $this->dao->my_query($sql);
      }
 }