<?php
/**
迭代器模式，获取全部的student记录
 */

namespace Core;
class AllStudent implements \Iterator
{
    protected $ids=[];//全部id
    protected $index;//指针当前位置
    function __construct()
    {
        $db=Factory::createDb();
        $result=$db->query('select id from student');
        $this->ids=$result->fetch_all(MYSQLI_ASSOC);//获取全部id
    }

    //当前记录
    public function current()
    {
        $id=$this->ids[$this->index]['id'];
        return Factory::getStudent($id);
    }
//下一个记录
    public function next()
    {
        $this->index++;
    }
//指针位置
    public function key()
    {
        return $this->index;
    }
//验证是否还有下一个
    public function valid()
    {
        return $this->index<count($this->ids);
    }
//指针复位至初始位置
    public function rewind()
    {
        $this->index=0;
    }
}