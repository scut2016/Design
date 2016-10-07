<?php
/**
 * 文件名：Register.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 22:08
 */
namespace Core;
class Register {
    protected static $objects=[];
  static  function set($alias,$object)
    {
        self::$objects[$alias]=$object;
    }
    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
    static function get($name)
    {
        return self::$objects[$name];
    }
}