<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Login extends Controller
{
    // get 请求方式 Index 请求方法
    public function login()
    {
    	return $this->fetch("Login/login");
    }

   
    
}
