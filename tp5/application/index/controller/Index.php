<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	// echo "sm";
    	//加载模板
    	return $this->fetch("User/index");
    }
}
