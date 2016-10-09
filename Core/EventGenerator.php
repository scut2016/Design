<?php
/**
 * 文件名：EventGenerator.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/9 19:27
 */
namespace Core;
abstract class EventGenerator
{
    private $observers=[];
    function addObserver(IObserver $observer){
        $this->observers[]=$observer;
    }
     function notify(){
         foreach ($this->observers as $observer)
         {
             $observer->update();
         }
     }
}