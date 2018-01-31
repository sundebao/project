<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Test extends Controller
{
    public function index($id)
    {
    	// echo "111";
    	echo "商品的id为".$id;
    }

    //传递多个参数
    public function index2($name,$id){
    	echo $name.":".$id;
    }

    public function index3(){
    	echo "this is dologin";
    }

    //登录
    public function add(){
    	return $this->fetch("Login/add");
    	// echo "1111";
    }

    public function delete(){
    	echo "this is delete";
    }
}
