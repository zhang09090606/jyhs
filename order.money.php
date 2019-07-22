<?php
include( "includes/init.php" );
if ( empty( $_SESSION[ 'name' ] ) ) {
	$Db->back_info( "请您先登录", "login.php" );
}
$name = $_SESSION[ 'name' ];
$id=$_GET['id'];
$row = $Db->get_one( "order", "id='$id'");
$price=$row['lastprice'];
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
	<img src="images/fanhui.png" class="arrow" onclick='window.history.back(-1);'>
	<div align="center" <?php if($price!=''){echo "hidden";}?>>
		<img src="images/empty_order.png" class="empty_img">
		<br>
		<p class="empty_p">
			回收员还有没有给出最终价格，请耐心等待
		</p>
	</div>
	<div align="center" <?php if($price==''){echo "hidden";}?>>
		<img src="images/empty_order.png" class="empty_img">
		<br>
		<p class="empty_p">
			回收员给出的最终价格为：<?php echo $price?>
			<input type="button" id="button" value="确定交易">
		</p>
	</div>
</body>
<script>
	$(function(){
		$("#button").click(function(){
			$.ajax	( {
				type: "post",
				async: false,
				url: "order_check.php",
				data: "id=<?php echo $id;?>"+"&action=finish",
				dataType: "json",
				success: function ( msg ) {
					alert("交易成功，我们将在一工作日内将回收金额打到您的账户");
					window.location.href='order.score.php';
				}
			});
		});
	})
</script>
</html>