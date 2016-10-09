<?php
/**
 * 文件名：CondimentButter.php
黄油调味品
 */
namespace Decorator;
class CondimentButter extends CondimentDecorator
{
    public $_beverage;
    public function __construct($beverage){
        $this->_name = 'Buffer';
        if($beverage instanceof Beverage){
            $this->_beverage = $beverage;
        }else
            exit('Failure');
    }
    public function Cost(){
        return $this->_beverage->Cost() + 5;
    }
}