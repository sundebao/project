<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Views extends Controller
{
    // get 请求方式 Index 请求方法
    public function getIndex()
    {
    	//加载模板(分配数据)
    	$arr=array(
    			array('name'=>'admin','age'=>10),
    			array('name'=>'admins','age'=>25)

    		);
    	return $this->fetch("Vie/index",['arr'=>$arr,'name'=>'sm','pass'=>"abcdffdg",'time'=>time(),'c'=>30]);
    }

    //模板继承
    public function getIndex2(){
    	return $this->fetch("Vie/index2");
    }

   
    
}
