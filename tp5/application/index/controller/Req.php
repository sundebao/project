<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Req extends Controller
{
    public function getIndex()
    {
    	// $request  请求对象
    	//创建请求对象
    	$request=request();
    	//获取请求信息
    	//获取url地址(不包含域名)
    	$url=$request->url();
    	//获取url地址(包含域名)
    	$url1=$request->url(true);
    	//获取ip地址
    	$ip=$request->ip();
    	//获取请求方式
    	$method=$request->method();
    	//获取指定类型参数
    	$name=$request->get('name');
    	//检测参数是否存在
    	$a=$request->has('id');
    	// echo $name;
    	//获取所有请求参数
    	$all=$request->param();
    	//获取部分参数
    	$onlyparam=$request->only(['name']);
    	$exceptparam=$request->except(['name']);
    	//获取模块名
    	$module=$request->module();
    	//获取控制器
    	$controller=$request->controller();
    	//获取方法
    	$action=$request->action();
    	echo $module.":".$controller.":".$action;
    	var_dump($exceptparam);
    }

   
    
}
