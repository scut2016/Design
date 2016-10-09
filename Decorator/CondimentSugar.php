<?php
/**
 * 文件名：CondimentSugar.php

 */

namespace Decorator;

class CondimentSugar extends CondimentDecorator
{
    public $_beverage;
    public function __construct($beverage){
        $this->_name = 'Sugar';
        if($beverage instanceof Beverage){
            $this->_beverage = $beverage;
        }else
            exit('Failure');
    }
    public function Cost(){
        return $this->_beverage->Cost() + 2.5;
    }
}