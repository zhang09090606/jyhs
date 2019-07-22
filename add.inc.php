<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'name' ];
$rows = $Db->get_all( "add", "name='$name'" );
$action=$_GET['action'];
if($action=="jfshop"){
	$rdo=[];
	$id=$_GET['id'];
	$url="jfshop.send.php?id=$id";
}else{
	$url="case.send.php";
	$rdo= unserialize(base64_decode($_GET['rdo']));
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/add.inc.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<title>选择收货地址</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>    
	<script  src="jyzfz_admin/My97DatePicker/WdatePicker.js"></script>
	<script  src="js/add.inc.js"></script>
	
</head>

<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">选择收货地址</font>
	</div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
	
		<?php
			foreach($rows as $v){
				
		?>
		<div class="main" id="main">
		<form action="<?php echo $url?>" method="post" name="<?php echo $v['id']?>" id="<?php echo $v['id']?>">
			<p><?php echo $v['peo']?>   <?php echo $v['tel']?></p>
			<p><?php echo $v['addname']?> <?php echo $v['inf']?></p>
			<input type="text" name="rdo" value="<?php echo base64_encode(serialize($rdo));?>" hidden="">
			<input name="add" id="add" value="<?php echo $v['id']?>" hidden>
			<?php 
				foreach($rdo as $v){
			?>
				<input type="checkbox" id="checkbox" value="<?php echo $v?>" class="rdo" name="rdo[]" checked hidden>
			<?php
				}
			?>
		</div>
		</form>
		<hr size="6px" color="#EAEAEA">
		<?php
		}
		?>
	
	  <input type="button" name="submit" id="submit" value="添加新地址" class="push_button red" style="display: block" onClick="location='my.add.add.php'">
	

</body>

</html>