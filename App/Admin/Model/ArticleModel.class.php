<?php

class ArticleModel extends Model{
    public function insertArt($art){
        $sql = sprintf("insert into blog_article values(default,%s,'%s','%s','%s','%s','%s',default,default,default,default)",$art['cate_id'],$art['title'],$art['thumb'],$art['art_desc'],$art['content'],$art['author']);
        return $this->dao->my_query($sql);
    }
    /**
     * 获得文章数据
     *
     * @param int $id
     * @param boolean $getDel 是否获得被删除的文章
     * @return array
     */
    public function getArticle($id=NULL,$getDel=false){
        if(!$id){
            $pageNum = isset($_GET['pageNum'])?$_GET['pageNum']:1;
            $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
            $offset = ($pageNum-1)*$rowsPerPage;
            $sql = "select a.*,c.cate_name from blog_article as a left join blog_category as c on a.cate_id = c.cate_id where is_del = '0' order by addtime desc limit $offset,$rowsPerPage";
            return $this->dao->fetchAll($sql);
        }
        else{
            $sql = "select * from blog_article where art_id={$id}";
            return $this->dao->fetchRow($sql);
        }
    }

    public function updateArticleById($art,$id){
        $sql = sprintf("update blog_article set cate_id=%s,title='%s',content='%s',art_desc='%s',author='%s'   where art_id=%s",$art['cate_id'],$art['title'],$art['content'],$art['art_desc'],$art['author'],$id);
        return $this->dao->my_query($sql);
    }
    public function delArtById($id){
        $sql =  "update blog_article set is_del='1' where art_id = {$id}";
        return $this->dao->my_query($sql);
    }
    public function getDelArt(){
        $sql = "select a.*,c.cate_name from blog_article as a left join blog_category as c on a.cate_id = c.cate_id where is_del = '1' order by addtime desc";;
        return $this->dao->fetchAll($sql);
    }

    public function realDelById($id){
        $sql = "delete from blog_article where art_id = {$id}";
        return $this->dao->my_query($sql);
    }

    public function recoverArt($id){
        $sql =  "update blog_article set is_del='0' where art_id = {$id}";
        return $this->dao->my_query($sql);

    }


    public function getRowCount(){
        $sql = "select count(*) from blog_article where is_del='0'";
        return $this->dao->fetchColumn($sql);
    }
    /**
     * 获得回收站中的总文章数
     *
     * @return int
     */
    public function getDelRowCount(){
        $sql = "select count(*) from blog_article where is_del='1'";
        return $this->dao->fetchColumn($sql);
    }
}