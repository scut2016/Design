<?php
/**
 * 文件名：CondimentMilk.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/9 21:16
 */

namespace Decorator;
class CondimentMilk extends CondimentDecorator
{
    public $_beverage;
    public function __construct($beverage){
        $this->_name = 'Milk';
        if($beverage instanceof Beverage){
            $this->_beverage = $beverage;
        }else
            exit('Failure');
    }
    public function Cost(){
        return $this->_beverage->Cost() + 3;
    }
}