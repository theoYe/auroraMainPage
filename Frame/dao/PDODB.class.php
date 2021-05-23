<?php
/**
 * 封装PDO类
 */

 class PDODB implements I_DAO{
    	/**
	 * 定义相关的属性
	 */
	private $host; // 主机地址
	private $port; // 端口号
	private $user; // 用户名
	private $pass; // 密码
	private $charset; // 字符集
    private $dbname; // 数据库名
    private $dsn;
	// 运行的时候需要的属性
    private  $pdo; // 用于保存对象
    private static $instance;
	/**
	 * 构造方法
	 */
	private function __construct($arr) {
		// 初始化属性的值
		$this->initParams($arr);
        // 初始化pdo对象
        $this->initPDO();
        //初始化对象属性
        $this->initAttr();
    }
    protected function disError($e){
        echo '错误信息为:',$e->getMessage(),'<br />';
        echo '错误代码为:',$e->getCode(),'<br />';
        echo '错误脚本为:',$e->getFile(),'<br />';
        echo '错误行号为:',$e->getLine(),'<br />';
        return false;
    }
    protected function initParams($arr){
        $this->host = isset($arr['host']) ? $arr['host'] : 'localhost';
		$this->port = isset($arr['port']) ? $arr['port'] : '3306';
		$this->user = isset($arr['user']) ? $arr['user'] : 'root';
		$this->pass = isset($arr['pass']) ? $arr['pass'] : '';
		$this->charset = isset($arr['charset']) ? $arr['charset'] : 'utf8';
        $this->dbname = isset($arr['dbname'])?$arr['dbname'] : '';
        //初始化DSN
        $this->dsn = sprintf("mysql:dbname=%s;host=%s;charset=%s;port=%s",$this->dbname,$this->host,$this->charset,$this->port);
    }
    protected function initPDO(){
        try{
        $this->pdo = new PDO($this->dsn,$this->user,$this->pass);
    }catch(PDOException $e){
        echo '数据库连接失败<br />';
        $this->disError($e);
        die;
    }   
    }
    protected function initAttr(){
        //错误模式改为异常模式
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance($arr){
        if(!isset(self::$instance))
            self::$instance = new PDODB($arr);
        return self::$instance;
    }

    public function my_query($sql){
        try{
            $result = $this->pdo->exec($sql);
        }catch(PDOException $e){
            $this->disError($e);
            die;
        }
        return $result;
    }
    public function fetchAll($sql)
    {
        try{
            $stmt = $this->pdo->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //释放资源
            $stmt->closeCursor();
        }catch(PDOException $e){
            $this->disError($e);
        }
        return $result;

    }
    public function fetchRow($sql){
        try{
            $stmt = $this->pdo->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //释放资源
            $stmt->closeCursor();
        }catch(PDOException $e){
            $this->disError($e);

        }
        return $result;
    }
    public function fetchColumn($sql){
        try{
            $stmt = $this->pdo->query($sql);
            $result = $stmt->fetchColumn();
            //释放资源
            $stmt->closeCursor();
        }catch(PDOException $e){
            $this->disError($e);
        }
        return $result;
    }
    private function __clone(){

    }
 }



