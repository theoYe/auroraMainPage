<?php
/**
 * Frame类，入口文件的控制器
 */
class Frame{

    public static function run(){
        //定义目录常量
        static::initConst();
        //加载配置
        static::initConfig();
        //确定分发参数
        static::initRoute();
        //定义路由相关常量
        static::initRouteConst();
        //注册自动加载类
        static::initAutoload();
        //请求分发
        static::initDispatch();
    }
    //初始化配置文件到超全局变量中
    protected static function initConfig(){
        $GLOBALS['config'] = require_once CONFIG_DIR.'conf.php';
    }

    protected static function initConst(){
        define('DS','/');
        //定义目录常量
        define('ROOT_DIR',str_replace('\\',DS,getcwd().DS));
        define('APP_DIR',ROOT_DIR.'App'.DS);   
        define('FRAME_DIR',ROOT_DIR.'Frame'.DS);
        define('CONFIG_DIR',ROOT_DIR.'Config'.DS);
        define('DAO_DIR',FRAME_DIR.'dao'.DS);   //data access object 目录
        define('VENDOR_DIR',ROOT_DIR.'Vendor'.DS);  //使用的插件库目录
        define('SMARTY_DIR',VENDOR_DIR.'Smarty'.DS); //Smarty模板引擎目录
        define('PUBLIC_DIR',ROOT_DIR.'Public'.DS);  //公开资源目录
        define('UPLOADS_DIR',ROOT_DIR.'Uploads'.DS); //upload directory
    }
    protected static function initRoute(){
        $default_platform = $GLOBALS['config']['App']['default_platform'];
        define('PLATFORM',isset($_GET['p'])?$_GET['p']:$default_platform);
        
        //使用常量保存控制器的名字，保证控制器在程序运行时不会改变
        $default_controller = $GLOBALS['config'][PLATFORM]['default_controller'];
        define('CONTROLLER',isset($_GET['c'])?$_GET['c']:$default_controller);
        
        $default_action = $GLOBALS['config'][PLATFORM]['default_action'];
        define('ACTION',isset($_GET['a'])?$_GET['a']:$default_action);
    }
    //确定路由后，来进行常量初始化
    public static function initRouteConst(){
        //内部路由分发常量
        define('CURRENT_CON_DIR',APP_DIR.PLATFORM.DS.'Controller'.DS);
        define('CURRENT_MODEL_DIR',APP_DIR.PLATFORM.DS.'Model'.DS);
        define('CURRENT_VIEW_DIR',APP_DIR.PLATFORM.DS.'View'.DS);
        //外部资源目录常量，这里使用相对路径
        define('CSS_DIR',DS.'Public'.DS.PLATFORM.DS.'css'.DS);
        define('IMAGES_DIR',DS.'Public'.DS.PLATFORM.DS.'images'.DS);
        define('JS_DIR',DS.'Public'.DS.PLATFORM.DS.'js'.DS);
    }

    /**
     * 自动加载类函数
     */
    protected static function autoload($class_name){
        $frame_class_list = array(
            'Controller'=>FRAME_DIR.'Controller.class.php',
            'Model'     =>FRAME_DIR.'Model.class.php',
            'Factory'   =>FRAME_DIR.'Factory.class.php',
            'MySQLDB'   =>DAO_DIR.'MySQLDB.class.php',
            'PDODB'     =>DAO_DIR.'PDODB.class.php',
            'I_DAO'     =>DAO_DIR.'I_DAO.interface.php',
            'Smarty'    =>SMARTY_DIR.'Smarty.class.php',
            'Captcha'   =>VENDOR_DIR.'Captcha.class.php',
            'Upload'    =>FRAME_DIR.'Upload.class.php',
            'Page'      =>FRAME_DIR.'Page.class.php'
        );
        
        if(isset($frame_class_list[$class_name]))
        {
            require ($frame_class_list[$class_name]);
        }
        elseif(substr($class_name,-10)=='Controller'){
            require CURRENT_CON_DIR.$class_name.'.class.php';
        }
        elseif(substr($class_name,-5)=='Model'){
            require CURRENT_MODEL_DIR.$class_name.'.class.php';
        }
    }
    protected static function initAutoload(){
        spl_autoload_register('static::autoload');
    }
    //路由分发确定
    protected static function initDispatch(){
        //确定控制器名字
        $controller_name = CONTROLLER.'Controller';
        // 确定动作名
        $action_name  = ACTION.'Action';
        //载入需要的控制器类
        $controller  = new $controller_name;
        //实例化控制器类
        $controller->$action_name();
    }
}
