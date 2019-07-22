<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body style="margin:0; padding:0;">
	<div class="header_div" align="center">
		<font color="#FFFFFF" size="+3">登录</font>
	</div>
	<div class="main_div">
		<div class="main_logo">
		<img src="images/head.png">
		</div>
		<div class="form_div">
			<form name="myform" action="login_check.php" method="post">
				<font size="+1">用户名：</font>
				<input name="name" type="text" placeholder="请填写手机号" class="form_div_input"><br>
				<hr color="#57cf22">
				<font size="+1">密&nbsp;&nbsp;&nbsp;码：</font>
				<input name="pwd" type="password" placeholder="请填写密码" class="form_div_input"> <br>
				<input type="submit" name="submit" id="submit" value="登录" class="push_button red">
			</form>
			<span class="main_span1">找回密码</span>
			<span class="main_span2"  onclick="location='register.php'">立刻注册</span>
			<img src="images/hslogin.png" class="weixin" onclick="location='hs.login.php'">
		</div>
	</div>
</body>
</html>
