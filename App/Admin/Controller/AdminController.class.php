<?php
/**
 * 后台管理员登录，注销，增删改查等
 */
class AdminController extends PlatformController{
    //登录
    public function loginAction(){
        //载入当前视图文件
        $this->display('login.html');
    }
    public function checkAction(){

        $admin_name =$this->escapeData($_POST['admin_name']);
        $admin_pass = trim($_POST['admin_pass']);
        $passcode = $_POST['passcode'];
        $captcha = Factory::M('Captcha');
        if(!$captcha->checkCaptcha($passcode)){
            //验证码非法.跳转
            $this->jump('index.php?p=Admin&c=Admin&a=login',':(验证码错误');
            return false;
        }
        $admin_m = Factory::M('AdminModel');
        if($row = $admin_m->check($admin_name,$admin_pass)){
           $this->jump('index.php?p=Admin&c=Manage&a=index',':)登录成功');      
            //如果正确就把信息存在session中
            $_SESSION['adminInfo'] = $row;
            $admin_m->updateAdminInfo($row['admin_id']);
        }
        else {
            $this->jump('index.php?p=Admin&c=Admin&a=login',':(用户名或密码错误，请重新尝试');
            
            return false;
        }

    }
    public function captchaAction(){
        $cap = Factory::M('Captcha');
        $cap->generate();
    }
    /**
     * 注销操作
     *
     */
    public function logoutAction(){
        //删除会话数据
        unset($_SESSION['adminInfo']);
        //删除会话
        session_destroy();
        //立即跳转到登录页面
        $this->jump('index.php?p=Admin&c=Admin&a=login');
    }



}
