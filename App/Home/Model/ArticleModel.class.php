<?php
/**
 * 前台文章模型
 */
class ArticleModel extends Model{
    public function getArticle(){
        $sql = "select a.*,m.member_name,m.member_id,c.cate_name,c.cate_id from blog_article as a left join blog_member as m on a.author=m.member_id left join blog_category as c on a.cate_id=c.cate_id and is_del='0';";
        return $this->dao->fetchAll($sql);
    }
    public function getArticleByCate($cate_id){
        $sql = "select a.*,m.member_name,m.member_id,c.cate_name,c.cate_id from blog_article as a left join blog_member as m on a.author=m.member_id left join blog_category as c on a.cate_id=c.cate_id where c.cate_id={$cate_id} and is_del='0';";
        return $this->dao->fetchAll($sql);
    }
    public function getArticleByAuthor($author_id){
        $sql = "select a.*,m.member_name,m.member_id,c.cate_name,c.cate_id from blog_article as a left join blog_member as m on a.author=m.member_id left join blog_category as c on a.cate_id=c.cate_id where a.author={$author_id} and is_del='0';";
        return $this->dao->fetchAll($sql);
    }
    public function getArticleById($art_id){
        $sql = "select a.*,m.member_name,m.member_id,c.cate_name,c.cate_id from blog_article as a left join blog_member as m on a.author=m.member_id left join blog_category as c on a.cate_id=c.cate_id where a.art_id={$art_id} and is_del='0';";
        return $this->dao->fetchRow($sql);
    }
    public function getRowCount(){
        $sql = "select count(*) from blog_article where is_del='0'";
        return $this->dao->fetchColumn($sql);
    }
    public function getCateRowCount($cate_id){
        $sql = "select count(*) from blog_article as a left join blog_member as m on a.author=m.member_id left join blog_category as c on a.cate_id=c.cate_id where c.cate_id={$cate_id} and is_del='0';";
        return $this->dao->fetchColumn($sql);
    }
    public function getAuthorRowCount($author_id){
        $sql = "select count(*) from blog_article as a left join blog_member as m on a.author=m.member_id left join blog_category as c on a.cate_id=c.cate_id where a.author={$author_id} and is_del='0';";
        return $this->dao->fetchColumn($sql);
    }
    
}