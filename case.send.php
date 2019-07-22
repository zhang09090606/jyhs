<?php
include( "includes/init.php" );
header("Cache-control: private");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$name=$_SESSION['name'];
$temp=$Db->get_one("order","name='$name'");
if($temp){
	$tid=$temp['id'];
	msg_url_no("您有未派订单，请耐心等待或取消订单","case.send.wait.php?id=$tid");
	die;
}
if ( !empty( $_POST[ "rdo" ] ) ) {
	$rows = $_POST[ "rdo" ];
} else {
	msg_url_no( "验证失败", 'case.php' );
	die;
}



if(!empty($_POST['add'])){
	$add=$_POST['add'];
		$arr=$Db->get_one("add","id='$add'");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/case.send.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<title>确认订单</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>    
	<script  src="jyzfz_admin/My97DatePicker/WdatePicker.js"></script>
</head>

<body>
	
	<div class="head" align="center">
		
		<font color="#FFFFFF" size="+2">确认订单</font>
	</div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
	<form action="<?php echo "case_check.php?rdo=".base64_encode(serialize($rows));?>" method="post">
	<div class=add_div onclick="location='<?php echo "add.inc.php?action=case&rdo=".base64_encode(serialize($rows));?>'">
			<img src="images/add.png" class="add_img">
				<p class="add_p" >
					<?php
						if(!empty($add)){
							echo $arr['addname']." ".$arr['inf'];
						}else{
							echo "请选择地址";
						}						
					?>
				</p>
				<input name="add" hidden value="<?php echo $arr['id']?>">
			<img src="images/arrow.png" class="add_arrow">
	</div>
	<hr size="1px" color="#EAEAEA">
	<div class=time_div>
			<img src="images/add.png" class="time_img">
				<p class="time_p">预约取废品时间:</p>
			<input name="ytime" readonly type="text" id="d241" value="尽快送达" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px"/>
			
	</div>
	<hr size="6px" color="#EAEAEA" class="main_hr">
		<div style="height:<?php $sum=count($rows)*40+155; echo $sum.'px'?>">
		<?php
		$sum=0;
		
		foreach ( $rows as $v ) {
			
			$row = $Db->get_one( "case", "id='$v'" );
			$sum+=$row['price'];
			?>
		<div class="main_div">
			<p class="p1" align="center"><?php echo $row['class']?></p>
			<p class="p2" align="center">×<?php echo $row['num']?>kg（个）</p>
			<p class="p3" align="center">价格：<?php echo $row['price']?>元</p>
			
		</div><hr color="#EAEAEA" size="1px" class="main_hr">
		<?php
		}
		?>
		</div>
	<div class="botten_div">
		
			<input type="submit" class="submit" name="submit" value="提交订单" onClick="return check()">
			<input name="action" value="send" hidden=""> 
			<div class="price">合计：
				<font color="#F90D11" id="price">
					<?php echo $sum?>
				</font>元
			</div>
	</form>
			
			
			</div>
	<script src="js/case.js" type="text/javascript"></script>
	<script>
		function check(){
			var s=<?php if(empty($add)){echo "false";}else{echo "true";}?>;
			if(s==false){
				alert("请选择地址");
				return false;	
			}else{
				if(confirm("预计总价仅为参考价格，回收员鉴定后会给出最终价格")){
					return true;
				}else{
					return false;
				}
			}	
		}
	</script>
</body>

</html>