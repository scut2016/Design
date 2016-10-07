<?php
/**
 * 文件名：Load.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 21:05
 */
namespace Core;
class Loader{
    static function autoload($class)
    {
       $path= BASEDIR.'/'.$class;
        $path=str_replace('\\','/',$path);//保证linux通用
       require ($path.'.php');
    }
}