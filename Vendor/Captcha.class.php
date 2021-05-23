<?php
/**
 *  验证码工具类
*  @package Captcha
*/
class Captcha{
    private $width;    
    private $height;
    private $pixelnum;   //干扰点密度
    private $linenum;   //干扰线数量
    private $stringnum;   //验证码字符个数
    private $string;   //要写入的随机字符串
    

    /**
    * 类的构造器
    */
    public function __construct (){
        $this->initParams();

    }
    /**
     * 从配置文件中初始化属性
     */
    protected function initParams(){
        $this->width= $GLOBALS['config']['Captcha']['width'];
        $this->height= $GLOBALS['config']['Captcha']['height'];
        $this->pixelnum= $GLOBALS['config']['Captcha']['pixelnum'];
        $this->linenum= $GLOBALS['config']['Captcha']['linenum'];
        $this->stringnum= $GLOBALS['config']['Captcha']['stringnum'];
    }
    /**
     * 生成验证码
     */
    public function generate(){
        //创建画布
        $image = imagecreatetruecolor($this->width,$this->height);
        //创建背景色句柄
        $backcolor = imagecolorallocate($image,mt_rand(200,255),mt_rand(150,255),mt_rand(200,255));
        //填充背景
        imagefill($image,0,0,$backcolor);
        //获得随机字符串
        $this->string= $this->getRandString();
        //计算字符间隔
        $span = ceil($this->width/($this->stringnum)-1);
        //写入字符
        for($i = 1;$i <=$this->stringnum;$i++)
        {
            $stringcolor = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,100), mt_rand(0,80));
            imagestring($image, 5, $i*$span-6, ($this->height/2)-6, $this->string[$i-1], $stringcolor);
        }
        //添加干扰线
        for($i=1;$i<=$this->linenum;$i++) {
            $linecolor = imagecolorallocate($image, mt_rand(0,150), mt_rand(30,250), mt_rand(200,255));
            imageline($image,mt_rand(0,169),mt_rand(0,39),mt_rand(0,169),mt_rand(0,39),$linecolor);
            $x1 = mt_rand(0,$this->width-1);
            $y1 = mt_rand(0,$this->height-1);
            $x2 = mt_rand(0,$this->width-1);
            $y2 = mt_rand(0,$this->height-1);
            imageline($image,$x1,$y1,$x2,$y2,$linecolor);
        }
        //添加干扰点
        for($i=1;$i<=$this->width*$this->height*$this->pixelnum;$i++) {
            $pixelcolor = imagecolorallocate($image, mt_rand(100,150), mt_rand(0,120), mt_rand(0,255));
            imagesetpixel($image, mt_rand(0,$this->width-1),mt_rand(0,$this->height), $pixelcolor);
        }
        //输出图片
        header("content-type:image/png");
        ob_clean(); //清理数据缓冲区
        imagepng($image);
        //销毁图片
        imagedestroy($image);
    }
    /**
     * 产生随机字符串
     *
     * @return string
     */
    public function getRandString(){
        $arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
        shuffle($arr);
        $rand_keys = array_rand($arr, 4);
        $str = '';
        foreach ($rand_keys as $value) {
            $str .= $arr[$value];
        }
        session_start();
        $_SESSION['captcha'] = $str;
        return $str;
    }
    /**
     * 设置图片宽度
     *
     * @param int  $w
     * @return void
     */
    public function setWidth($w){
        $this->width = $w;
    }
    /**
     * 设置图片高度
     *
     * @param int $h
     * @return void
     */
    public function setHeight($h){
        $this->height = $h;
    }

     /**
     * 验证验证码是否正确
     *
     * @param string $passcode
     * @return boolean
     */
    public function checkCaptcha($passcode){
        session_start();
        return strtolower($passcode)=== strtolower(trim($_SESSION['captcha']));
    }


}