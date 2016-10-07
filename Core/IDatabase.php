<?php
/**
 * 文件名：IDatabase.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 23:10
 */
namespace Core;
interface IDatabase{
    function connect($host,$user,$pwd,$dbName);
    function query($sql);
    function close();
}