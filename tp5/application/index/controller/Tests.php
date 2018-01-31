<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
// session_start();
class Tests extends Controller
{
    // get 请求方式 Index 请求方法
    public function getIndex()
    {
    	echo "这是列表页";
    }

    public function getAdd(){
        echo "这是添加页面";
    }

    public function getDelete(){
        echo "这是删除页面";
    }

    public function getEdit(){
        echo "这是修改页面";
    }


    //通过路由别名访问的方法
    public function index2(){
        echo "this is index2";
    }

    public function a(){
        echo "aaa";
    }

    public function b(){
        echo "bbb";
    }

    public function shop($name,$age){
        // echo "shop";
        echo $name.":".$age;
    }

    public function getIndex3($name){
        echo $name;
    }

    public function sessionset(){
        // echo $_SESSION['name'];
        $_SESSION['name']="admin";
    }

     public function sessionget(){
        echo $_SESSION['name'];
        
    }

    //用内置的方法设置session
    public function sessionsset(){
        // session('age',10);
        echo session('age');
    }
    
}
