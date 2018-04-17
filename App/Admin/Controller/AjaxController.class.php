<?php
namespace Admin\Controller;
use Think\Controller;
class AjaxController extends Controller{

    public function send_sms(){
        //引入短信发送核心文件
        //vendor只想到ThinkPHP\Library\Vendor
        vendor('sms.httpUtil');
        //实例化
        $sms = new \httpUtil();

        $funAndOperate = "industrySMS/sendSMS";

        // 参数详述请参考http://miaodiyun.com/https-xinxichaxun.html

        // 生成body
        $body = $sms->createBasicAuthData();

        $code = mt_rand(1000,9999);
        $time = (int)date('i',time());
        // 在基本认证参数的基础上添加短信内容和发送目标号码的参数
        $body['smsContent'] = "【许林苒】您的验证码为".$code."，请于".$time."分钟内正确输入，如非本人操作，请忽略此短信。";
        $body['to'] = '15107739130';

        // 提交请求
        $result = $sms->post($funAndOperate, $body);
      
    }
  
}