<?php
/**
 * 文件名：Milk.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/9 22:27
 */

namespace Decorator;
class Milk implements ICondiment
{
    function Cost()
    {
        return 5;
    }

    function Name()
    {
        return 'Milk';
    }

}