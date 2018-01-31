<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
//导入路由类
//通过命名空间自动加载路由类
use think\Route;
use think\Config;
//路由普通的访问格式（单个传参）
Route::rule("/admin/:id","index/Test/index","get",["ext"=>"html"],['id'=>'\d+']);
//多个参数 get 请求方式
Route::get("/index-<name>-<id>","index/Test/index2");
//表单模拟post请求
Route::get("/login","index/Test/add");
Route::post("/dologin","index/Test/index3");
//快捷路由(推荐使用)
//所有的请求统统可以交给以/test 开头的路由去处理
Route::controller("/test","index/Tests");

//路由别名
//所有的操作统统交给路由别名去处理
Route::alias('user',"index/Tests");

//路由组
Route::group(['mathod'=>'get',[]],function(){
	//子路由1
	Route::get("/a","index/Tests/a");
	//子路由2
	Route::get("/b","index/Tests/b");

});

//控制器
Route::get("/shop","index/Tests/shop");
//快捷访问控制器
Route::controller("/s","index/Tests");

//控制器初始化
//后台用户列表
Route::controller("/users","index/User");
//后台订单列表
Route::controller("/order","index/Order");
Route::get("/sess","index/Tests/sessionset");
Route::get("/sesss","index/Tests/sessionget");
//内置方法设置获取session
Route::get("/tes","index/Tests/sessionsset");
//后台登录
Route::get("/adminlogin","index/Login/login");

//请求路由
Route::controller("/req","index/Req");

//视图
Route::controller("/views","index/Views");







