<?php
/**
 * 文件名：Factory.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 21:49
 */
namespace Core;
use Decorator\CondimentDecorator;

class Factory{
    static function createDb()
    {
        $db=Database::getDb();
        Register::set('db1',$db);
        return $db;
    }
    static function getStudent($id)
    {
        $key=$id;
        $db=Register::get($id);
        if(!$db)
        {
            $db=new Student($id);
            Register::set($key,$db);
        }
        return $db;
    }
    //创建调味咖啡
    static function createCoffee($name)
    {
        $condimentCoffee=Register::get($name.'Coffee');
        if(!$condimentCoffee)
        {
            $coffee=new \Decorator\Coffee();
            $class='\Decorator\\'.'Condiment'.ucfirst($name);
//            $condimentCoffee=$name.'Coffee';
            $condimentCoffee=new $class($coffee);
            Register::set($name.'Coffee',$condimentCoffee);
        }
        return $condimentCoffee;
    }
}