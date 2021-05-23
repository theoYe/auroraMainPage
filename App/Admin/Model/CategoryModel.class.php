<?php

class CategoryModel extends Model{
    /**
     * 默认获得分类树，有id参数则返回对应行
     *
     * @return array
     */
    public function getCategory($cate_id=NULL){
        if(!$cate_id){
            $sql = "select * from blog_category";
            $list= $this->dao->fetchAll($sql);
            return $this->getCateTree($list);
        }else{
            $sql = sprintf("select * from blog_category where cate_id = %s",$cate_id);
            return $this->dao->fetchRow($sql);
        }
    }

    /**
     * 格式化分类列表，重新排序树状显示
     *
     * @param array $list
     * @param integer $pid
     * @param integer $level
     * @return array $cate_list 格式化之后的分类列表
     */
    public function getCateTree($list,$pid=0,$level=0){
        static $cate_list = array();
        foreach($list as $row)
        {
            if($row['cate_pid'] == $pid){
                $row['level'] = $level;
                $cate_list[] = $row;
                $this->getCateTree($list,$row['cate_id'],$level+1);
            }
        }
        return $cate_list;
    }
    public function insertCate($cate){
        $sql = sprintf("insert into blog_category values(default,'%s',%s,%s,'%s')",$cate['cate_name'],$cate['cate_pid'],$cate['cate_sort'],$cate['cate_desc']);
        return $this->dao->my_query($sql);
    }
    public function delCate($cate_id){
        $sql = sprintf('delete from blog_category where cate_id=%s',$cate_id);
        return $this->dao->my_query($sql);
    }
    public function updateCate($cate,$cate_id){
        $sql = sprintf(" update blog_category set cate_name = '%s',cate_pid = %s,cate_sort = %s,cate_desc='%s'  where cate_id = %s;",$cate['cate_name'],$cate['cate_pid'],$cate['cate_sort'],$cate['cate_desc'],$cate_id);
        return $this->dao->my_query($sql);
    }

}
