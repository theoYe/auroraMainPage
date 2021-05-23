<?php
/**
 * 
 */
class ManageController extends PlatformController{
    /***
     * 首页
     */
    public function indexAction(){
        $art_m = Factory::M('ArticleModel');
        $member_m = Factory::M('MemberModel');
        $artNum = $art_m->getRowCount();
        $memNum = $member_m->getRowCount();
        $this->assign('artNum',$artNum);
        $this->assign('memNum',$memNum);
        $this->display('index.html');
    }

    public function indexManageAction(){
        $member_m = Factory::M('MemberModel');
        $membersInfo = $member_m->getMember();
        $this->assign('membersInfo',$membersInfo);
        $this->display('manage.html');
    }
    public function dealIndexManageAction(){
        $members_id = $_POST['member_id'];
        $member_m = Factory::M('MemberModel');
        $result = $member_m->setOnIndex($members_id);
        if($result){
            $this->jump('index.php?p=Admin&c=Manage&a=indexManage',':)设置成功');
        }else{
            $this->jump('index.php?p=Admin&c=Manage&a=indexManage',':(设置失败');
        }
    }
}





