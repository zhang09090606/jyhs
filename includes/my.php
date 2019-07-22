<?php
include("includes/init.php");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$name=$_SESSION['name'];		
$row = $Db->get_one("user","name='$name'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/my.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/my.js" type="text/javascript"></script>
<title>我的</title>
</head>
<body>
	<div class="head" align="center"><font color="#FFFFFF" size="+2">我的</font></div>
	<div class="div1">
		<img src="images/head.png" class="div1_image">
		<span class="div1_font"><?php echo $row['nickname'];?></span>
		
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onClick="location='order.all.php'">
		<img src="images/dingdan.png" class="main_img">
		<p class="main_p">废品订单</p>
		<div class="div_div" >
			<p class="div_div_p">查看所有订单</p>
			<img src="images/arrow.png" class="div_div_img">
		</div>
	</div>
	<hr color="#EAEAEA" size="1px">
	<div class="div3">
				<li>
					<ul onClick="location='order.wait.php'"><center><img src="images/issumit.png"></center></ul>	
					<ul onClick="location='order.run.php'"><center><img src="images/qiangdan.png"></center></ul>	
					<ul onClick="location='order.finish.php'"><center><img src="images/recovery.png"></center></ul>	
				</li>
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onClick="location='my.add.php'">
		<img src="images/add.png" class="main_img">
		<p class="main_p" >我的地址</p>
		<img src="images/arrow.png" class="div_div_img">
	</div>
	<hr color="#EAEAEA" size="1px">
	<div class="main_div">
		<img src="images/erweima.png" class="main_img">
		<p class="main_p">分享二维码</p>
		<img src="images/arrow.png" class="div_div_img">
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onclick="location='call.php?action=user'">
		<img src="images/call.png" class="main_img" style="width: 30px;height: 30px">
		<p class="main_p" >联系我们</p>
		<img src="images/arrow.png" class="div_div_img">
	</div>
	<hr color="#EAEAEA" size="1px">
	<div class="main_div" onClick="location='my.setup.php'">
		<img src="images/shezhi.png" class="shezhi">
		<p class="main_p">&nbsp;设置</p>
		<img src="images/arrow.png" class="div_div_img" >
	</div>
	<div class="botten_div">
		<table class="botten_table">
			<tr>
				<td  align="center" id="pic1"><img src="images/botten1.png" id="p1" width="40px" height="40px"></td>
				<td  align="center" id="pic2"><img src="images/botten2.png" id="p2" width="40px" height="50px"></td>
				<td  align="center" id="pic3"><img src="images/botten3.png" id="p3" width="40px" height="40px"></td>
				<td  align="center" id="pic4"><img src="images/botten4.png" id="p4" width="40px" height="40px"></td>
			</tr>
		</table>
		
	</div>
</body>
</html>
