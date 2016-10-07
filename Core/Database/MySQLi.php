<?php
/**
 * 文件名：MySQLi.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 22:39
 */
namespace Core\Database;
use Core\IDatabase;
class MySQLi implements IDatabase{
    protected $conn=null;
    function connect($host, $user, $pwd, $dbName)
    {
       $conn=new \mysqli($host,$user,$pwd,$dbName);
        $this->conn=$conn;
    }

    function query($sql)
    {
       return $this->conn->query($sql);
    }

    function close()
    {
        $this->conn->close();
    }

}