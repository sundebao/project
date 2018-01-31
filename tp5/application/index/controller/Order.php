<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Order extends Allow
{
    // get 请求方式 Index 请求方法
    public function getIndex()
    {
    	echo "这是后台订单列表页";
    }

   
    
}
