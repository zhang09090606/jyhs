<?php
include("includes/init.php");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$name=$_SESSION['name'];

 	
//print_r($waste);

$temp=1;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/order.css" rel="stylesheet" type="text/css" />
<script src='js/jquery.js'></script>
<script src="js/jquery-1.9.1.min.js"></script>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<title>订单</title>
	
</head>

<body>
	<div id="class" hidden><?php echo 0 ?> </div>
	<div class="head" align="center"><font color="#FFFFFF" size="+2">选择商品属性</font></div>
	<img src="images/fanhui.png" class="arrow" onclick="location='index.html'" >
	<div align="center" class="div1">
		<img src="images/other.jpg" width="120px" height="100px" id="pic">
	</div>
	<hr color="#EAEAEA" size="1px">

	<form id="form" method="post" action="order_upload.php?gid=0" >
	</div>	
	<div class="div2" id="case">
		<p class="p1"><span style="float: left">废品名字：</span><input type="text" name="name" id="num" class="div2_input" placeholder="请填写废品名字"></p>
		<hr color="#EAEAEA" size="1px">
		<p class="div2_p" id="p2">废品重量：</p>
			<input type="text" name="num" id="num" class="div2_input" placeholder="请填写废品重量(数目)"  onkeyup="clearNoNum(this)">
			<p id="p3" style="margin-top:0px">/kg（个）</p>
			
			<hr color="#EAEAEA" size="1px">
			<p class="price">预计总价为：<font color="#FC070B" id="price">待鉴定</font></p>
			<input onClick="return check()" name="submit" type="submit" value="加入废品车" class="push_button red" >
		</form>
		
	</div>	
	 <script src="js/order.js" type="text/javascript"></script>
</body>

</html>