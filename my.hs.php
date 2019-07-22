<?php
include("includes/init.php");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$name=$_SESSION['name'];	
$row = $Db->get_one("hsuser","username='$name'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transi	tional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/hsuser.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/my.js" type="text/javascript"></script>
<title>我的</title>
</head>
<body>
	<div class="head" align="center"><font color="#FFFFFF" size="+2">我的</font></div>
	<div class="div1">
		<img src="images/head.png" class="div1_image">
		<span class="div1_font"><?php echo $row['name'];?></span>
		
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onClick="location='order.all.php'">
		<img class="main_img" src="images/dingdan.png" width="40px" height="40px">	
		<p class="main_p">废品订单</p>
		<div class="div_div" >
		<img src="images/arrow.png" class="main_arrow">
			<p class="main_all_p">查看所有订单</p>
		
			
		</div>
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div">
		<img src="images/balloon.png" class="main_img">
		<p class="main_p">正在进行的订单</p>
		<img src="images/arrow.png" class="main_arrow">
	</div>
	<hr color="#EAEAEA" size="1px">
	<div class="main_div">
		<img src="images/add.png" class="main_img">
		<p class="main_p">已完成订单</p>
		<img src="images/arrow.png" class="main_arrow">
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div">
		<img src="images/balloon.png" class="main_img">
		<p class="main_p">设置</p>
		<img src="images/arrow.png" class="main_arrow">
	</div>
</body>
</html>
