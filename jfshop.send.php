<?php
include( "includes/init.php" );
header( "Cache-control: private" );
if ( empty( $_SESSION[ 'name' ] ) ) {
	$Db->back_info( "请您先登录", "login.php" );
}
$name = $_SESSION[ 'name' ];
$arr = $Db->get_one( "user", "name='$name'" );
$id = $_GET[ 'id' ];
if ( !empty( $_POST[ 'add' ] ) ) {
	$add = $_POST[ 'add' ];
	$arr2 = $Db->get_one( "add", "id='$add'" );
}
$row = $Db->get_one( "jfshop", "id='$id'" );
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/jfshop.send.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<title>填写兑换信息</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
	<script src="jyzfz_admin/My97DatePicker/WdatePicker.js"></script>
</head>

<body>

	<div class="head" align="center">

		<font color="#FFFFFF" size="+2">填写兑换信息</font>
	</div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);">
	<form action="jfshop_check.php" method="post">
		<input name="action" value="send" hidden="">
		<input name="id" value="<?php echo $id?>" hidden="">
		<div class=add_div onclick="location='<?php echo " add.inc.php?action=jfshop&id=$id"?>'">
			<img src="images/add.png" class="add_img">
			<p class="add_p">
				<?php
	
				if ( !empty( $arr2 ) ){
					echo $arr2[ 'addname' ] . " " . $arr2[ 'inf' ];
				} else {
					echo "请选择地址";
				}
				?>
				<input name="add" hidden value="<?php echo $arr2['id']?>">
			</p>
			<img src="images/arrow.png" class="add_arrow">
		</div>
		<hr size="6px" color="#EAEAEA" class="main_hr">
		<div>
			<div class="main_div">
				<p class="p1" align="center">
					<?php echo $row['name']?>
				</p>
				<p class="p3" align="center">需要绿化值：
					<?php echo $row['need']?>
				</p>
			</div>
			<hr color="#EAEAEA" size="1px" class="main_hr">
		</div>
		<div>
			<p class="num">输入兑换数量：</p>
				
					<p class="contact-input">
					<input type="text" id="num" name="num" placeholder="请输入兑换数量" autofocus>

				</p>
		</div>
		<div class="botten_div">
			
			
				<input type="submit" class="submit" name="submit" value="提交订单" onClick="return check()">	
				
				<div class="price" style="position: relative;right: 28px">当前拥有绿化值为:
					<font color=#346E0C id="price">
						<?php echo $arr['point'];?>
					</font>
					
				</div>
	
	</div>
	</form>
	<script src="js/case.js" type="text/javascript"></script>
	<script>
		function check() {
			var s = <?php if(empty($add)){echo "false";}else{echo "true";}?>;
			var q =$("#num").val();
			if ( s == false) {
				alert( "请选择地址" );
				return false;
			}else if(q==''){
				alert( "请选择兑换数量" );
				return false;
			}else if(<?php echo $arr['point']?><$("#num").val()*<?php echo $row['need']?>){
				alert( "绿化值不足，赶快去回收吧" );
				return false;
			} else if(<?php echo $row['num']?><$("#num").val()){
				alert( "数量超过剩余数量" );
				return false;
			} else {
				if ( confirm( "确定兑换该商品?" ) ) {
					
					return true;
				} else {
					return false;
				}
			}
		}
	</script>
</body>

</html>