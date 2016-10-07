<?php
/**
 * 文件名：PDO.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 22:39
 */
namespace Core\Database;
use Core\IDatabase;
class PDO implements IDatabase{
    protected $conn;
    function connect($host, $user, $pwd, $dbName)
    {
        $conn=new \PDO("mysql:host=$host;dbname=$dbName",$user,$pwd);
        $this->conn=$conn;
    }

    function query($sql)
    {
      return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }



}