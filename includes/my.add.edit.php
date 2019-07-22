<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$id=$_GET['id'];
$row=$Db->get_one("add","id=$id");
$name = $_SESSION[ 'name' ];
if(!empty($_POST['sever_add'])){	
	$add=$_POST['sever_add'];
	$lng=$_POST['lng'];
	$lat=$_POST['lat'];
}else{
	$add=$row['addname'];
	$lng=$row['lng'];
	$lat=$row['lat'];
}
?>
<!doctype html>
<html>

<head>

	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="css/add.add.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-1.9.1.min.js"></script>
		<title>添加地址</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
		<script src="admin/My97DatePicker/WdatePicker.js"></script>
		<script src="js/my.add.js"></script>
	</head>

</head>

<body>
	<form action="my.add_check.php" method="post">
		<div class="head" align="center">
			<font color="#FFFFFF" size="+2">添加地址</font>
		</div>
		<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);">

		<div class="input_div">
			<font size="+1">联系人：</font><input class="input" id="peo" placeholder="请填写联系人" name="peo" value="<?php echo $row['peo'];?>">
			<hr size="1px" width="95%"  align="center" color=#E4E4E4> 
			<font size="+1">手机号：</font>
			<input class="input" id="tel" placeholder="请填写手机号" name="tel" value="<?php echo $row['tel'];?>">

			<hr size="1px" width="95%" align="center" color=#E4E4E4> 
			<div class="div" onClick="location='my.add.edit.map.php'" ><font size="+1"><?php echo "	您选择地址为：  ".$add;?></font>
			<img src="images/arrow.png" class="div_div_img"></div>	
			<hr size="1px" width="95%" align="center" color=#E4E4E4> 

			<font size="+1">详细地址:</font><input name="adds" type="text" id="adds" class="add_input" width="100%" placeholder="   请详细到门牌号" id="sever_add" value="<?php echo $row['inf'];?>">
			<hr size="1px" width="95%" align="center" color=#E4E4E4>

			<div id='allmap' align="center" style='width: 100%; height: 300px; position: relative; display: none'></div>
			<input name="lng" value="<?php echo $lng;?>" hidden="">
			<input name="add" value="<?php echo $add;?>" hidden="">
			<input name="lat" value="<?php echo $lat;?>" hidden="">
			<input name="action" value="edit" hidden="">
			<input name="id" value="<?php echo $id;?>" hidden="">
		</div>
		<div align="center" id="sumbit" class="botten">保存</div>
	</form>
	
</body>

</html>