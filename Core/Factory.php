<?php
/**
 * 文件名：Factory.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 21:49
 */
namespace Core;
class Factory{
    static function createDb()
    {
        $db=Database::getDb();
        Register::set('db1',$db);
        return $db;
    }
}