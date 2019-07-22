<?php
	function msg_success($msg,$url,$surl,$type = 0,$limittime=0)
	
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo $msg;?></title>
<style>
img{border:0;}
body{margin:0; padding:0; font:12px/1.5 tahoma,arial,"\5b8b\4f53",sans-serif;}
a:link{color:#06c; text-decoration:none;}
a:visited{color:#06c; text-decoration:none;}
a:hover{color:#06c; text-decoration:underline;}
a:active{blr:expression(this.onFocus=this.blur())}
a:focus {
    outline:none;
    -moz-outline:none;
}

.window{width:90%; border:solid 1px #91B7E0; margin:0px auto 0;margin-top: 150px}
.window .tips-title{height:27px; line-height:27px; background:#5791CB; padding:0 12px;}
.window .tips-title strong{font-size:14px; color:#FFF; padding-left:24px; height:27px; display:block; background:url(images/window_icon.png) scroll 0 4px no-repeat;}
.window .tips-box{padding:25px 20px 25px 65px; min-height:70px; height:70px; height:70px; font-size:14px;}
.window .tips-box .tip-icon{width:36px; height:35px; background:url(images/win_tips.png) 0 0 no-repeat; float:left; margin-right:18px;}
.window .tips-box .tip-icon1{width:36px; height:35px; background:url(images/sendok_ico.gif) 0 0 no-repeat; float:left; margin-right:18px;}
.window .tips-box .tip-cont{width:100px; float:left; padding-top:6px;color: #02832D;font-size: 13px}
.window .bottom-tips{height:29px; line-height:29px; background:#E4ECF7; color:#666;}
.window .bottom-tips .login-t{text-align:center; display:block;font-size: 18px;}
</style>
</head>

<body>
<div class="window">
  <div class="tips-title"><strong>提示信息</strong></div>
  <div class="tips-box">
  <?php
  if($type == 0)
  {
  ?>
    <div class="tip-icon1">&nbsp;</div>
    <?php
  }else{
	  
	?>
     <div class="tip-icon">&nbsp;</div>
    <?php
  }
	?>
    <div class="tip-cont"><?php echo $msg;?></div>
  </div>
  <div class="bottom-tips"><span class="login-t"><a href="<?php 
  $litime = ($limittime==0 ? 4000 : $limittime);
    $func = '';
  if($url == '-1')
  {
	  $url = 'javascript:history.go(-1);';
	  }
	  
	   $func = "  <script language='javascript'>   
      function JumpUrl(){
        location.href='$url'; 
      }\r\n";
	  $rmsg = $func;
        $rmsg .= "setTimeout('JumpUrl()',$litime);</script>";
  echo $surl;
  ?>"><font color="#FC0509">点击这里返回主页</font></a></span></div>
</div>
</body>
</html>
<?php
echo $rmsg;
}
?>
