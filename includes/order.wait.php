<?php
 include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'name' ];
if(!empty($_SESSION['con'])){
	$id=$_SESSION['conid'];
	header("Location:case.send.wait.php?id=$id");
}
 

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/order.inc.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	
	<title>废品车</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
</head>

<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">正在进行订单</font>
	</div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
	<div align="center"> 
	<img src="images/empty_order.png" class="empty_img">
	<br>
	<p class="empty_p">
		还没有该分类订单,赶快去回收吧
	</p>
	</div>

</html>