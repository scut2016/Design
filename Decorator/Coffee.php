<?php
/**
 * 文件名：Coffee.php
被装饰 Coffee类
 */

namespace Decorator;
class Coffee extends Beverage
{
    public function Cost()
    {
        $this->_name='Coffee';
    }

    public function __construct()
    {
        return 10.0;
    }

}