<?php
 include( "includes/init.php" );
if(empty($_SESSION['hsname'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'hsname' ];
 $rows = $Db->get_all( "order", "hsuser='$name' and isfinish='否'" );

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
		<font color="#FFFFFF" size="+2">正在进行的订单</font>
	</div>
	<img src="images/fanhui.png" class="arrow" onClick="window.history.back(-1);" >
	<div align="center" <?php if($rows){echo "hidden";}?>> 
	<img src="images/empty_order.png" class="empty_img">
	<br>
	<p class="empty_p">
		还没有该分类订单,赶快去回收吧
	</p>
	</div>
	<div class="main" style="height: <?php $sum=count($rows)*380;echo $sum;?>">
	
	<?php
	foreach ( $rows as $v ) {
		$conid = $v[ 'conid' ];
		$row = $Db->get_all( "ordercon", "id='$conid'" );
		?>
		<hr size="8px" color="#FFFFFF">
		<?php
		$sum=0;
		foreach($row as $arr){
		$sum+=$arr['price'];
		$class=$arr['name'];
		$res = $Db->select_num( "waste", "name='$class'","pic");
		$pic = mysql_fetch_array($res);
		$pic=substr($pic['0'],3);		
		?>
	<div class="main_div">
		
		<div class="main_div2"><img src="<?php echo $pic;?>">
		</div>
		<div class="main_div3">
			<p class="main_div_p1">
				<?php echo $arr['name']?>
			</p>
			<p class="main_div_p2">数量：
				<?php echo $arr['num']?>kg(个)</p>
				<br>
			<p class="main_div_p2">价格为：
				<?php echo $arr['price']?>元</p>
		</div>

	<?php
		}
		?>
	<div class="main_bottom">
		<div class="main_bottom_font"><font color="#F46511"><?php 
			if($v['isstart']=='否'){
				echo "未接单";
			}else if($v['isfinish']=='是'){
				echo "已完成";
			}else{
				echo "正在进行";
			}
			?></font></div>
		<div class="main_bottom_div"><p>共<?php echo count($row);?>件废品，共计￥<?php echo $sum?>元</p></div>
		<input id="<?php echo $v['id']?>" onClick="run()" type="button" value="完成订单" class="main_delete" name="delete" id="delete">
	</div>
		
	</div>
	<hr color="#EAEAEA" size="6px">
	<?php
	}
	?>
	</div>
		<script src="js/hs.order.js" type="text/javascript"></script>
</body>

</html>