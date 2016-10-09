<?php

/**
 * 文件名：CondimentDecorator.php
调味品装饰器类
 */
namespace  Decorator;
class CondimentDecorator extends Beverage
{
    public function __construct()
    {
        $this->_name='Condiment';
    }

    public function Cost()
    {
        return 2;
    }

}