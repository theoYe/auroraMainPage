<?php
/***
 * 管理员数据模型
 */

 class AdminModel extends Model{

    public function check($admin_name,$admin_pass)
    {
        $sql = "select * from blog_admin where admin_name = '{$admin_name}' and admin_pass = md5('{$admin_pass}')";
        return  $this->dao->fetchRow($sql);;
    }
    /**
     * 更新管理员信息
     */
    public function updateAdminInfo($id){
        $login_ip = $_SERVER["REMOTE_ADDR"];
        $sql = "update blog_admin set login_ip='$login_ip',login_count = login_count+1 where admin_id = $id";
        return $this->dao->my_query($sql);
    }
 }