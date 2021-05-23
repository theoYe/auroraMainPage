<?php
/**
 * 分类数据模型
 */
class CategoryModel extends Model{
    
    public function getFirstCategory($cate_id=NULL){
        if(!$cate_id){
            $sql = "select * from blog_category where cate_pid='0'";
            $list= $this->dao->fetchAll($sql);
            return $list;
        }else{
            $sql = sprintf("select * from blog_category where cate_id = %s",$cate_id);
            return $this->dao->fetchRow($sql);
        }
    }
    public function getCategoryById($cate_id){
        $sql = sprintf("select * from blog_category where cate_id = %s",$cate_id);
        return $this->dao->fetchRow($sql);
    }

}
