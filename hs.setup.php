<?php
include("includes/init.php");
if(empty($_SESSION['hsname'])){
    $Db->back_info("请您先登录","hs.login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transi	tional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/setup.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/my.js" type="text/javascript"></script>
<title>设置</title>
</head>
<body>
	<div class="head" align="center"><font color="#FFFFFF" size="+2">设置</font></div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
	<div class="main_div">
		<p class="main_p">关于我们</p>
	</div>
	<hr color="#EAEAEA" size="1px">
	<div class="main_div" onClick="location='message.php'">
		<p class="main_p" >给我们留言</p>
	</div>
	<hr color="#EAEAEA" size="8px">
	<div class="main_div" id="logout">
		<p class="main_p">安全注销</p>
	</div>
	<hr color="#EAEAEA" size="8px">
	
</body>
<script>
	$(function () {
		$("#logout").click(function(){
			$.ajax({
				type: "post",
				async: false,
				url: "loginout.php",
				data: {action: "hsuser"},
				dataType: "json",
				success: function (data) {
					alert("注销成功");
					window.location.href="login.php";
				}
			});
		});
			
		});
</script>
</html>
