<?php
/**
 * 数据库类接口
 */

 interface I_DAO{
     public static function getInstance($arr);
     public function my_query($sql);
     public function fetchAll($sql);
     public function fetchRow($sql);
     public function fetchColumn($sql);
 }
