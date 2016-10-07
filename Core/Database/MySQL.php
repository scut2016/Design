<?php
/**
 * 文件名：MySQL.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 22:38
 */
namespace Core\Database;
use Core\IDatabase;
class MySQL implements IDatabase{
    protected $conn;
    function connect($host, $user, $pwd, $dbName)
    {
       $conn=mysql_connect($host,$user,$pwd);
        mysql_select_db($dbName,$conn);
        $this->conn=$conn;
    }

    function query($sql)
    {
        mysql_query($sql,$this->conn);
    }

    function close()
    {
        mysql_close($this->conn);
    }

}