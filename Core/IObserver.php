<?php
/**
 * 文件名：IObserver.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/9 19:29
 */

namespace Core;
interface IObserver
{
    function update($event=null);
}