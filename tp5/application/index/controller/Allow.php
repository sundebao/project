<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Allow extends Controller
{
    //初始化方法
    public function _initialize(){
    	// echo "这是初始化方法_initialize";exit;
    	//检测用户是否登录(检测用户是否具有登录的session信息)
    	if(!session('islogin')){
    		// echo "请先登录";exit;
    		//跳转
    		// $this->error("请先登录","/adminlogin");
    		// $this->success("ok","/adminlogin");
    		//重定向
    		$this->redirect("/adminlogin");

    	}
    } 

   
    
}
