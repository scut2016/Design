<?php
/**
 * 文件名：Coffee.php
被装饰 Coffee类
 */

namespace Decorator;
class Coffee extends Beverage
{
    protected $condiments=[];
    //纯咖啡的价格
    public function Cost()
    {
        return 10.0;
    }

    public function __construct()
    {
        $this->_name='Coffee';
    }
    
    public function addDecorator(ICondiment $condiments)
    {
        $this->condiments[]=$condiments;
    }
    //获取总价
    public function total()
    {
        $cost=0;
        foreach ($this->condiments as $condiment)
        {
            $cost+=$condiment->Cost();
        }
        return $cost+$this->Cost();
    }
    //获取咖啡名
    public function coffeeName()
    {
        $name='';
        foreach ($this->condiments as $condiment)
        {
            $name.=$condiment->Name();
        }
        return $name.'Coffee:';
    }

}