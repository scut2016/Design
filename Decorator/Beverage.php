<?php

/**
 * 文件名：Beverage.php
   饮料接口   soy 酱油 ，mocha 摩卡咖啡   ， coffee咖啡
 * condiment调味品 ： sugar 糖 ， milk牛奶
 * 我们的要求是coffee中加牛奶的价格 为coffee的价格加上牛奶的价格  ，coffee中加糖的价格为
 */
namespace  Decorator;
abstract class Beverage
{
    public $_name;//名称
    abstract public function Cost();//价格
}