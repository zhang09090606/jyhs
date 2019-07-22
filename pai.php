<?php
 include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/pai.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	
	<title>废品车</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
</head>

<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">排行榜</font>
		
	</div><img src="images/fanhui.png" class="arrow" onClick="location='my.php'" >
	<div>
	<div class="main" >
		<div main_div>
			<img src="images/first.png" class="main_img"></img>
			<p class="main_p">孙悟空</p>
			<font class="main_font" color=#F3721A>已回收20次</font>
			<br>
			<hr size="1px" color="#EAEAEA">		
		</div>
			
	</div>
	<div class="main" >
		<div main_div>
			<img src="images/srcond.png" class="main_img"></img>
			<p class="main_p">猪八戒</p>
			<font class="main_font" color=#F3721A>已回收13次</font>
			<br>
			<hr size="1px" color="#EAEAEA">		
		</div>
			
	</div>
	<div class="main" >
		<div main_div>
			<img src="images/third.png" class="main_img"></img>
			<p class="main_p">沙僧</p>
			<font class="main_font" color=#F3721A>已回收10次</font>
			<br>
			<hr size="8px" color="#EAEAEA">		
		</div>
			
	</div>
	<div class="main" >
		<div main_div>
			<img src="images/mypai.png" class="main_img"></img>
			<p class="main_p">您当前排名第16位</p>
			<font class="main_font" color=#F3721A style="margin-left: 55px">已回收4次</font>
			<br>
			<hr size="1px" color="#EAEAEA">		
		</div>
			
	</div>
</body>

</html>