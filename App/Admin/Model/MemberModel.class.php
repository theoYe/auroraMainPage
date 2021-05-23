<?php
/**
 * 成员的数据模型
 */
class MemberModel extends Model{
    public function getMember(){
        $pageNum = isset($_GET['pageNum'])?$_GET['pageNum']:1;
        $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
        $offset = ($pageNum-1)*$rowsPerPage;
        $sql = "select a.*,c.group_name from blog_member as a left join blog_group as c on a.group_id = c.group_id  limit $offset,$rowsPerPage";
        return $this->dao->fetchAll($sql);
    }
    public function getRowCount(){
        $sql = "select count(*) from blog_member";
        return $this->dao->fetchColumn($sql);
    }
    public function insertMember($mem){
        $sql = sprintf("insert into blog_member values(default,'%s',%s,'%s','%s','%s','%s','%s','%s','%s',default)",$mem['member_name'],$mem['group_id'],$mem['member_number'],$mem['member_phone'],$mem['member_profile'],$mem['member_desc'],$mem['member_wechat'],$mem['member_qq'],$mem['member_mail']);
        return $this->dao->my_query($sql);
    }
    public function getMemberById($id){
        $sql = "select * from blog_member where member_id = $id";
        return $this->dao->fetchRow($sql);
    }
    public function updateMemberById($mem,$id){
        $sql = sprintf("update  blog_member set member_name='%s',group_id=%s,member_number='%s',member_phone='%s',member_profile='%s',member_desc='%s',member_wechat='%s',member_qq='%s',member_mail='%s' where member_id = $id",$mem['member_name'],$mem['group_id'],$mem['member_number'],$mem['member_phone'],$mem['member_profile'],$mem['member_desc'],$mem['member_wechat'],$mem['member_qq'],$mem['member_mail']);
        return $this->dao->my_query($sql);
    }

    public function delMemberById($id){
        $sql = "delete from blog_member where member_id = $id";
        return $this->dao->my_query($sql);
    }

    public function setOnIndex($members_id){
        foreach($members_id as $i=>$memberId){
            $num = $i+1;
            $sql = "update blog_member set member_onindex = '{$num}' where member_id=$memberId ";
            if(!$this->dao->my_query($sql))
                return false;
        }
        return true;
    }
}


