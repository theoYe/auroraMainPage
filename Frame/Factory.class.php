<?php

/**
 * 项目中的单例工厂
 */
class Factory{
    /**
     * 生成模型类的单例对象
     * @param string $class_name,
     * @return object
     */
    public static function M($class_name){
        // 定义静态变量,用户保存已经实例化的对象,下标是类名，值是类的对象
        static $model_list=array();
        if(!isset($model_list[$class_name])){
            $model_list[$class_name] = new $class_name;
        }
        return $model_list[$class_name];
    }
}