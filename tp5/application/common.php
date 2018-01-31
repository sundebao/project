<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
//导入 Loader类
use think\Loader;
use think\Config;
// 应用公共文件
function fun(){
	// echo "this is common fun";
	//在公共函数里通过命名空间自动加载三方类库
	$phone=new \Org\Util\Phone();
	// var_dump($phone);
	$phone->sendphone();
}

//演示发送邮件实例
function sendmail($to,$title,$content){
	$mail=new \Org\Util\PHPMailer();
	// var_dump($mail);
	//设置字符集
	$mail->CharSet="utf-8";
	//设置采用SMTP方式发送邮件
	$mail->IsSMTP();
	//设置邮件服务器地址
	$mail->Host=Config::get('mailarr.smtp');//
	//设置邮件服务器的端口 默认的是25  如果需要谷歌邮箱的话 443 端口号
	$mail->Port=25;
	//设置发件人的邮箱地址
	$mail->From=Config::get('mailarr.username'); //
	// $mail->FromName='我';//
	//设置SMTP是否需要密码验证
	$mail->SMTPAuth=true;
	//发送方
	$mail->Username=Config::get('mailarr.username');
	$mail->Password=Config::get('mailarr.password');//C客户端的授权密码
	//发送邮件的主题
	$mail->Subject=$title;
	//内容类型 文本型
	$mail->AltBody="text/html";
	//发送的内容
	$mail->Body=$content;
	//设置内容是否为html格式
	$mail->IsHTML(true);
	//设置接收方
	$mail->AddAddress(trim($to));
	if(!$mail->Send()){
		return false;
		// echo "失败".$mail->ErrorInfo;
	}else{
		return true;
	}

}

// 手动导入 三方类库（没有命名空间）  import
function fun1(){
	Loader::import('Org.Util.Pay');
	$pay=new Pay();
	// var_dump($pay);
	$pay->pays();
}

//手动导入 三方类库(没有命名空间) Vendor
function fun2(){
	Vendor('Excel.Excel');
	//实例化
	$excel=new Excel();
	$excel->excels();
}

//发送短信验证码
function fun3($s){
	Vendor('Lib.Ucpaas');
	//请求云之讯平台
	//初始化必填
	$options['accountsid']='xxxxxxxxxxxxxxxx';
	$options['token']='xxxxxxxxxxxxxxxxxxxxx';
	//初始化 $options必填
	$ucpass = new Ucpaas($options);
	//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
	$appId = "1312e81897284ef5a735bb7325aba209";
	$to = $s;
	//短信模板id
	$templateId = "242515";
	//短信验证码
	$param=rand(1,10000);
	//存储在session  cookie 缓存里
	$s=$ucpass->templateSMS($appId,$to,$templateId,$param);
	//转换为php数组
	$i=json_decode($s,true);
	$a[]=$i;
	echo json_encode($a);
}

