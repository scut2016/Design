<?php
/**
 * 文件名：Database.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 21:44
 */
namespace Core;

//单例模式改进
//第三步直接在类上加上关键字 final防止被继承
final class Database{
    private $host= "127.0.0.1";
    private $username = "root";
    private $pwd = "root";
    private $dbName = "train";
    private $charset = "utf8";
    private static $db=null;
    private $conn;
    //第一步 封锁new的操作，将构造函数私有化后就无法在new对象了
    private function __construct()
    {
        $this->conn = new \mysqli($this->host, $this->username, $this->pwd,$this->dbName); // 连接数据库
        $this->conn->set_charset($this->charset);
        if ($this->conn->connect_error) {
            die ('连接失败'.$this->conn->connect_error);
        }
    }
    //第二步开放一个外部访问的接口
    public static function getDb()
    {
        if(self::$db==null)//如果为空对象则重新new一个
            self::$db=new self();
        return self::$db;
    }
    private function __clone()//给__clone加上私有属性，防止外部使用clone方法
    {

    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
//    public function __destruct()
//    {
//
//        echo "+++单例被析构+++++<br>";
//    }
}