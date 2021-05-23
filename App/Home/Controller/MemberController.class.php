<?php

class MemberController extends PlatformController{
    public function indexAction(){
        $member_m = Factory::M('MemberModel');
        $member_list = $member_m->getMember();
        $this->assign('member_list',$member_list);

        $rowsPerPage = 5;
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Home&c=Member&a=index&";
        $rowCount = $member_m->getRowCount(); //获取总记录数 
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();
        $this->assign('strPage',$strPage);

        $this->display('index.html');
    }
}