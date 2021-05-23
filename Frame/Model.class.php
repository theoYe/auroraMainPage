<?php
/**
 * 基础模型类
 */
class Model{
    protected $dao;
    public function __construct(){
        //初始化dao层
        $this->initDAO();

    }
    protected function initDAO(){
        $config = $GLOBALS['config']['database'];
        $dao_class  = $GLOBALS['config']['App']['dao'];
        $this->dao = $dao_class::getInstance($config);
    }
    
    protected function __clone(){}

}