<?php
/**
 * 文件名：Sugar.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/9 22:41
 */
namespace Decorator;
class Sugar implements ICondiment
{
    function Cost()
    {
        return 4;
    }

    function Name()
    {
        return 'Sugar';
    }

}