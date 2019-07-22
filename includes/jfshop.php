 <?php
 include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'name' ];
$row=$Db->get_one('user',"name='$name'");
$point=$row['point'];
 $rows = $Db->get_all( "jfshop");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/jfshop.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jfshop.js" type="text/javascript"></script>
	<title>废品车</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
	<script>
		$(function(){
			$("#exchange").click(function(){
				var id=$(this).next().val();
				window.location.href='jfshop.send.php?id='+id;
			})
		});
	</script>
</head>

<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">绿化值商城</font>
	</div>
	<div align="center" <?php if($rows){echo "hidden";}?>> 
	<img src="images/casek.png" class="empty_img">
	<br>
	<p class="empty_p">
		抱歉，绿化值商城还没有可兑换的物品
	</p>
	</div>
	<div class="main" style="height: <?php $sum=count($rows)*160;echo $sum;?>">
	<form action="case.send.php" method="post">
	<?php
	foreach ( $rows as $v ) {
		?>
	<div class="main_div">
		<div class="main_div2">
		<img src="<?php echo $v['pic'];?>">
		</div>
		<div class="main_div3">
			<p>
				<?php echo $v['name']?>
			</p>
			<p>剩余数量：
				<?php echo $v['num']?>kg(个)</p>
			<p>需要的绿化值为：
				<?php echo $v['need']?></p>
		</div>
		<input id="exchange" type="button" value="兑换" class="push_button red" style="width: 50px;height: 25px;font-size: 15px;line-height: 30px;margin: 0px;float:right;right: 10px;top:50px">
			<input name="id" id="id" value="<?php echo $v['id']?>" hidden>
		
	</div>
	<hr color="#EAEAEA" size="4px">
	<?php
	}
	?>
	</div>
	<div class="botten_div">
		<div class="price">您的绿化值为：
			<font color="#F90D11" id="price">
				<?php echo $point?>
			</font>
			<input id="inc" type="button" value="已兑换物品" class="push_button red" style="width: 100px;height: 30px;font-size: 15px;line-height: 30px;margin: 0px;float:right;right: 20px;top:5px">
		</div>
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