<?php

/**
 * 前台首页控制器
 */
class IndexController extends PlatformController{
    public function indexAction(){
        $member_m = Factory::M('MemberModel');
        $member_on = $member_m->getOnIndexMember();
        $this->assign('member_on',$member_on);
        $this->display('index.html');
    }
}





