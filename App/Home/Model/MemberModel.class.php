<?php

class MemberModel extends Model{
    public function getMember(){
        $pageNum = isset($_GET['pageNum'])?$_GET['pageNum']:1;
        $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
        $offset = ($pageNum-1)*$rowsPerPage;
        $sql = "select a.*,c.group_name from blog_member as a left join blog_group as c on a.group_id = c.group_id  limit $offset,$rowsPerPage";
        return $this->dao->fetchAll($sql);
    }
    public function getOnIndexMember(){
        $sql = "select m.*,g.group_name from 
        blog_member as m left join 
        blog_group as g
         on m.group_id=g.group_id where  m.member_onindex<>'0' order by m.member_onindex;";
        return $this->dao->fetchAll($sql);
    }
    public function getMemberById($id){
        $sql = "select * from blog_member where member_id = $id";
        return $this->dao->fetchRow($sql);
    }
    public function getRowCount(){
        $sql = "select  count(*) from blog_member ";
        return $this->dao->fetchColumn($sql);
    }
}