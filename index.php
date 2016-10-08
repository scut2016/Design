<?php
/**
 * 文件名：index.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/7 15:33
 */

//PSR-0规范：
// 1.php的命名空间必须与绝对路径一直
//2.类名的首字母必须大写
//3.所有的类必须自动载入
//4.唯一的入口文件
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);//报告所有错误，除了notice
header("Content-type: text/html; charset=utf-8");
define('BASEDIR',__DIR__);
include "Core/Loader.php";
spl_autoload_register('\Core\Loader::autoload');//此代码实现自动加载类
Core\Object::test();
App\Controller\Home\Index::test();
$stack=new SplStack();//栈
$stack->push(1);//入栈
$stack->push(2);//入栈
echo '<br>';
echo $stack->pop().'<br>';//出栈 指针上移
echo $stack->pop();//出栈
echo "<br>队列操作<br>";
$queue=new SplQueue();
$queue->enqueue(1);
$queue->enqueue(2);
echo $queue->dequeue();
echo '<br>';
echo $queue->dequeue();
echo "<br>最小堆操作<br>";
$heap=new SplMinHeap();
$heap->insert(1);
$heap->insert(2);
echo $heap->extract();
echo '<br>';
echo $heap->extract();
echo "<br>固定长度数组操作<br>";
$array=new SplFixedArray(5);
$array[0]=1;
$array[4]=5;
var_dump($array);
//链式写法的核心是方法要返回一个this

//工厂模式调用Database对象
$db=Core\Factory::createDb();
$db1=Core\Register::get('db1');
var_dump($db);

$db=new Core\Database\MySQL();
$db->connect('127.0.0.1','root','root','train');
$result=$db->query('select * form student');
var_dump($result);
//策略模式
class Cate{
    protected $strategy=null;
    function index()
    {
        $this->strategy->showAd();
        $this->strategy->showCategory();
    }
    function setStrategy(Core\UserStrategy $strategy)
    {
        $this->strategy=$strategy;
    }
}
$c=new Cate();
if($_GET['female'])
{
    echo 1;
    $strategy=new \Core\FemaleUserStrategy();
}
else
{
    echo 0;
    $strategy=new \Core\MaleUserStrategy();
}
$c->setStrategy($strategy);
$c->index();
$stack=new SplStack();//栈
//10 进制转化为2进制
$a=32;
$bit=16;
while($a>$bit)
{
    $temp=$a%$bit;
    $stack->push($temp);
    $a/=$bit;
    if($a<$bit)
        $stack->push(floor($a));
}
while($stack)
{
   if($stack->isEmpty())
       break;
   echo $stack->pop();

}
echo "<br>";
//echo  decbin(18);//转换为2进制
//echo  decoct(18);//转化为8进制
echo dechex(32);//转化为16进制
