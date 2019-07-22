<?php
 include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'name' ];
 $rows = $Db->get_all( "jfshop_order", "user='$name'" );

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
		<font color="#FFFFFF" size="+2">已兑换物品</font>
	</div>
	<img src="images/fanhui.png" class="arrow" onClick="location='my.php'" >
	<div align="center" <?php if($rows){echo "hidden";}?>> 
	<img src="images/empty_order.png" class="empty_img">
	<br>
	<p class="empty_p">
		您还没有兑换过物品
	</p>
	</div>
	<div class="main" style="height: <?php $sum=count($rows)*380;echo $sum;?>">
	
	<?php
	foreach ( $rows as $v ) {
		?>
		<hr size="8px" color="#FFFFFF">
	<div class="main_div">
		
		<div class="main_div2">
			<img src="<?php echo $v['pic'];?>">
		</div>
		<div class="main_div3">
			<p class="main_div_p1">
				<?php echo $v['name']?>
				<br>
				</p>
				<p class="main_div_p2">数量：
				<?php echo $v['num']?>kg(个)</p>
				<br>
			<p class="main_div_p2">消耗绿化值为：
				<?php echo $v['price']?></p>
			
			
		</div>

	
	<div class="main_bottom">
		<div class="main_bottom_font"><font color="#F46511"><?php 
			if($v['isfinish']=='是'){
				echo "已收货";
			}else{
				echo "未收货";
			}
			?></font></div>

		<input id="<?php echo $v['id']?>" onClick="cencel()" type="button" value="删除订单" class="main_delete" name="delete" id="delete">
	</div>
		
	</div>
	<hr color="#EAEAEA" size="6px">
	<?php
	}
	?>
	</div>
		<script src="js/case.js" type="text/javascript"></script>
</body>

</html>