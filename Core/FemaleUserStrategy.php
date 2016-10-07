<?php
/**
 * 文件名：FemalUserStrategy.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 23:48
 */
namespace Core;
class FemaleUserStrategy implements UserStrategy{
    function showAd()
    {
        echo "2016女性服装新款";
    }

    function showCategory()
    {
        echo "女性分类";
    }

}