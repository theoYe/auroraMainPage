<?php
/**
 * 基础控制器类，封装Smarty
 */
 class Controller{


    protected $smarty;
    protected function initCode(){
        header('content-type:text/html;charset=utf-8');
    }

    protected function initSmarty(){
        $this->smarty = new Smarty;
        $this->smarty->setTemplateDir(CURRENT_VIEW_DIR.CONTROLLER.DS);
        $this->smarty->setCompileDir(APP_DIR.PLATFORM.DS.'View_c'.DS.CONTROLLER.DS);
    }
    protected function assign($name,$value){
        $this->smarty->assign($name,$value);
    }
    protected function display($file){
        $this->smarty->display($file);
    }
    /**
     * 构造方法，进行初始化
     */
    public function __construct()
    {
        //初始化文件编码
        $this->initCode();
        //初始化Smarty
        $this->initSmarty();
    }

    /**
     * 跳转
     * @param $url 目标URL
     * @param $info 提示信息
     * @param $time $等待时间(秒)
     */
    protected function jump($url,$info=NULL,$time=3){
        if(is_null($info)){
            //立即跳转
            header("location:".$url);
            die;  
        }else{
            //刷新提示跳转
        echo <<<JUMP
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>提示信息</title>
        <style type='text/css'>
            * {margin:0; padding:0;}
            div {width:390px; height:287px; border:1px #09C solid; position:absolute; left:50%; margin-left:-195px; top:10%;}
            div h2 {width:100%; height:30px; line-height:30px; background-color:#09C; font-size:14px; color:#FFF; text-indent:10px;}
            div p {height:120px; line-height:120px; text-align:center;}
            div p strong {font-size:26px;}
        </style>
        <div>
            <h2>提示信息</h2>
            <p>
                <strong>$info</strong><br />
                页面在<span id="second">$time</span>秒后会自动跳转，或点击<a id="tiao" href="$url">立即跳转</a>
            </p>
        </div>
        <script type="text/javascript">
            var url = document.getElementById('tiao').href;
            function daoshu(){
                var scd = document.getElementById('second');
                var time = --scd.innerHTML;
                if(time<=0){
                    window.location.href = url;
                    clearInterval(mytime);
                }
            }
            var mytime = setInterval("daoshu()",1000);
        </script>
JUMP;
        }
        
    }

    /**
     * 过滤用户数据
     *
     * @param string $data
     * @param string $allow_tags 允许的标记 如：'<br>'
     * @return string
     */
    protected function escapeData($data,$allow_tags=NULL){
        $data = addslashes(strip_tags(trim($data),$allow_tags));
        return $data;
    }
 }