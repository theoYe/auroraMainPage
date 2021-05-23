<?php
/**
 * 后台的平台控制器
 */
class PlatformController extends Controller{
   
    /**
     * 判断管理员是否登录
     *
     */
    protected function checkLogin(){
        //不需要验证的控制器方法
        $nocheck = array(
            'Admin' => array('login','check','captcha')
        );
        if(isset($nocheck[CONTROLLER]) && in_array(ACTION,$nocheck[CONTROLLER]))
        {
            //说明当前方法不需要验证
            return true;
        }

        session_start();
        if(!isset($_SESSION['adminInfo'])){
            //没登录，跳转页面
            $this->jump('index.php?p=Admin',':(请先登录');
            return false;
        }
    }
    /**
     * 构造方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->checkLogin();
    }

}





