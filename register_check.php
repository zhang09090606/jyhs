<?php
include("includes/init.php");
$action=$_POST['action'];
$a = new Auth();
switch ( $action ) {

    case "send";
        $tel=$_POST['tel'];

//电话号码发送 取消注释就可以发送了输入你想发送的电话号码
        $a->SendSmsCode($tel);
        msg_url( "验证成功", "register.yzm.php?tel=".$tel );

        break;
     case "check";
         $yzm=$_POST['yzm'];
         $tel=$_POST['tel'];
         $code=  $a->CheckSmsYzm($tel,$yzm);
         $c = json_decode($code);

         if($c->code==200){
             msg_url( "验证成功", "register.last.php?tel='.$tel" );
         }else{
             msg_url_no( "验证失败",'register.yzm.php?tel='.$tel );
         }
        break;
}
class Auth
{


//将你注册的 key和 secret 定义好。
//这是你注册网易云信获得的xxxxxxxxx为你自己需要填写的地方

    const APP_KEY = '761af5696546fde6e723b0db03fb6e7e';
    const APP_SECRET = 'b38c4e381c9b';
//发送验证码函数，传入手机号即可
    public function SendSmsCode($mobile = ""){
        $appKey = self::APP_KEY;
        $appSecret = self::APP_SECRET;  $nonce = '123456789';
        $curTime = time();
        $checkSum = sha1($appSecret . $nonce . $curTime);
        $data  = array(

            'mobile'=> $mobile,

//下方填写的是模板id
            'templateid'=>4022730,

        );
        $data = http_build_query($data);
        $opts = array (
            'http' => array(
                'method' => 'POST',
                'header' => array(
                    'Content-Type:application/x-www-form-urlencoded;charset=utf-8',
                    "AppKey:$appKey",
                    "Nonce:$nonce",
                    "CurTime:$curTime",
                    "CheckSum:$checkSum"
                ),
                'content' =>  $data
            ),
        );
        $context = stream_context_create($opts);
        $html = file_get_contents("https://api.netease.im/sms/sendcode.action", false, $context);
       // echo $html;
    }
    public function CheckSmsYzm($mobile = "",$Code=""){
        $appKey = self::APP_KEY;
        $appSecret = self::APP_SECRET;
        $nonce = '100';
        $curTime = time();
        $checkSum = sha1($appSecret . $nonce . $curTime);
        $data  = array(
            'mobile'=> $mobile,
            'code' => $Code,
        );
        $data = http_build_query($data);
        $opts = array (
            'http' => array(
                'method' => 'POST',
                'header' => array(
                    'Content-Type:application/x-www-form-urlencoded;charset=utf-8',
                    "AppKey:$appKey",
                    "Nonce:$nonce",
                    "CurTime:$curTime",
                    "CheckSum:$checkSum"
                ),
                'content' =>  $data
            ),
        );
        $context = stream_context_create($opts);
        $html = file_get_contents("https://api.netease.im/sms/verifycode.action", false, $context);
        return $html;
    }
}

//电话号码验证模板 200为正确，取消注释就验证，第一个xxxx是电话号码,第二个xxxxxx是验证码

?> 