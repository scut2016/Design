<?php
/**
 * 文件名：FemalUserStrategy.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 23:48
 */
namespace Core;
class MaleUserStrategy implements UserStrategy{
    function showAd()
    {
        echo "2016男性服装新款<br>";
    }

    function showCategory()
    {
        echo "男性分类<br>";
    }

}