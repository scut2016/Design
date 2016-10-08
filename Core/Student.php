<?php
/**
 * 文件名：Student.php
 * 编辑器：PhpStorm
 * 作者: lf
 * 日期: 2016/10/8 21:17
 */

namespace Core;
use Core\Database\MySQLi;

class Student
{
    public $id;
    public $stu_id;
    public $stu_name;
    public $class_id;
    protected $db=null;
    //构造函数完成取值
    function __construct($id)
    {
        $this->db=new MySQLi();
        $this->db->connect('localhost','root','root','train');
       $res= $this->db->query("select * from student where id=$id ");
        $data=$res->fetch_assoc();
        $this->id=$data['id'];
        $this->stu_id=$data['stu_id'];
        $this->stu_name=$data['stu_name'];
        $this->class_id=$data['class_id'];
    }
    //析构完成赋值
    function __destruct()
    {
        $sql="update student set stu_id='{$this->stu_id}',stu_name='{$this->stu_name}',class_id='{$this->class_id}' where id='{$this->id}'";
        echo "<br>";
        echo $sql;
        echo "<br>";
        $this->db->query($sql);
        echo "析构完成";
        echo "<br>";
    }
}