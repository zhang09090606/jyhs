<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>回首员登录</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body style="margin:0; padding:0;">
	<div class="header_div" align="center">
		<font color="#FFFFFF" size="+3">登录</font>
	</div>
	<div class="main_div">
		<div class="main_logo">
		<img src="images/hsuser.png" width="100px" height="100px">
		</div>
		<div class="form_div">
			<form name="myform" action="hs.login_check.php" method="post">
				<font size="+1">用户名：</font>
				<input name="name" type="text" placeholder="请填写用户名" class="form_div_input"><br>
				<hr color="#57cf22">
				<font size="+1">密&nbsp;&nbsp;&nbsp;码：</font>
				<input name="pwd" type="password" placeholder="请填写密码" class="form_div_input"> <br>
				<input type="submit" name="submit" id="submit" value="登录" class="push_button red">
			</form>
			<img src="images/userlogin.png" class="weixin" onclick="location='login.php'">
		</div>
	</div>
</body>
</html>
