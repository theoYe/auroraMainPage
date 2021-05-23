<?php

/**
 * 成员控制器
 */
class MemberController extends PlatformController{
    public function indexAction(){
        $member = Factory::M('MemberModel');
        $member_list = $member->getMember();
        $this->assign('member_list',$member_list);
        //分页动作
        $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Admin&c=Member&a=index&";
        $rowCount = $member->getRowCount(); //获取总记录数
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();

        $this->assign('strPage',$strPage);
        $this->display('index.html');
    }
    public function getPost(){
        $mem = array();
        $mem['member_name'] = $this->escapeData($_POST['member_name']);
        $mem['group_id'] = $this->escapeData($_POST['group_id']);
        $mem['member_number'] = $this->escapeData($_POST['member_number']);
        $mem['member_phone'] = $this->escapeData($_POST['member_phone']);
        $mem['member_desc'] = $this->escapeData($_POST['member_desc']);
        $mem['member_wechat'] = $this->escapeData($_POST['member_wechat']);
        $mem['member_qq'] = $this->escapeData($_POST['member_qq']);
        $mem['member_mail'] = $this->escapeData($_POST['member_mail']);
        return $mem;
    }
    public function addAction(){

        $this->display('add.html');
    }


    public function dealAddAction(){
        $mem = $this->getPost();
        $member = Factory::M('MemberModel');
        if(empty($mem['member_name'])  ||empty($mem['group_id']) ||empty($mem['member_phone'])
        ||empty($mem['member_desc']) ||empty($mem['member_number']))
        {
            $this->jump('index.php?p=Admin&c=Member&a=add','您填写的信息不完整');
            return ;
        }
        //判断是否有缩略图上传
        if($_FILES['member_profile']['error']!=4){
            //说明用户选择了上传文件
            $upload = Factory::M('Upload');
            //初始化相关参数
            $allow = array('image/jpeg','image/png','image/gif','image/jpg');
            $path = UPLOADS_DIR.'member_profile';
            //调用uploadAction方法
            $result = $upload->uploadAction($_FILES['member_profile'],$allow,$path);
            //判断是否上传成功
            if($result){
                $mem['member_profile'] = $result;   //将新名字记录到数组
            }else{
                //记录错误的信息并跳转
                $error = Upload::$error;
                $this->jump('index.php?p=Admin&c=Member&a=add',$error);
                return ;
            }

        }else{
            $mem['member_profile'] ='default.jpg';
        }


        $result = $member->insertMember($mem);
        if($result){
            $this->jump("index.php?p=Admin&c=Member&a=index",":)添加成功");
            return true;
        }else{
            $this->jump("index.php?p=Admin&c=Member&a=index",":(添加失败");
            return false;
        }
    }

    public function editAction(){
        $id = $this->escapeData($_GET['member_id']);
        $member = Factory::M('MemberModel');
        $memberInfo = $member->getMemberById($id);
        $this->assign('memberInfo',$memberInfo);
        $this->display('edit.html');
    }
    public function dealEditAction(){
        $member = $this->getPost();
        $member_id= $this->escapeData($_POST['member_id']);
        if(empty($member['member_name'])  ||empty($member['group_id']) ||empty($member['member_phone'])
        ||empty($member['member_desc']) ||empty($member['member_number']))
        {
            $this->jump('index.php?p=Admin&c=Member&a=edit&member_id='.$member_id,'您填写的信息不完整');
            return ;
        }
        //判断是否有缩略图上传
        if($_FILES['member_profile']['error']!=4){
            //说明用户选择了上传文件
            $upload = Factory::M('Upload');
            //初始化相关参数
            $allow = array('image/jpeg','image/png','image/gif','image/jpg');
            $path = UPLOADS_DIR.'member_profile';
            //调用uploadAction方法
            $result = $upload->uploadAction($_FILES['member_profile'],$allow,$path);
            //判断是否上传成功
            if($result){
                $member['member_profile'] = $result;   //将新名字记录到数组
            }else{
                //记录错误的信息并跳转
                $error = Upload::$error;
                $this->jump('index.php?p=Admin&c=Member&a=edit&member_id='.$member_id,$error);
            }

        }else{
            $member['member_profile'] = $_POST['member_profile_bak'];
        }

        $memberical = Factory::M('MemberModel');
        $result = $memberical->updateMemberById($member,$member_id);
        if($result){
            $this->jump('index.php?p=Admin&c=Member&a=index','更改成功');
        }else{
            $this->jump('index.php?p=Admin&c=Member&a=index','发生未知错误');
        }
    }

    public function delAction(){
        $id = $this->escapeData($_GET['member_id']);
        $member = Factory::M('MemberModel');
        $member->delMemberById($id);
        $this->jump('index.php?p=Admin&c=Member&a=index');
    }
    public function delAllAction(){
        $members = $_POST['member_id'];
        $member_m = Factory::M('MemberModel');
        foreach($members as $memberid){
            if(!$member_m->delMemberById($memberid))
            {
                $this->jump('index.php?p=Admin&c=Member&a=index','删除失败');
            }
        }
        $this->jump('index.php?p=Admin&c=Member&a=index','删除成功');
    }

}