<?php
include("includes/init.php");
if(empty($_SESSION['hsname'])){
    $Db->back_info("请您先登录","login.php");
}
$name=$_SESSION['hsname'];
$pid=$_GET['id'];
$row=$Db->get_one("order","id='$pid'");
$rows=$Db->get_all("ordercon","id='$pid'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transi	tional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/hs.run.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/my.js" type="text/javascript"></script>
<title>我的</title>
</head>
<body>
	<div class="head" align="center"><font color="#FFFFFF" size="+2">订单详情</font></div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
	<div class=top_div>
			<img src="images/add.png" class="top_img">
				<p class="top_p" >
					<?php
						echo "地址为：".$row['addname']." ".$row['addinf'];
											
					?>
				</p>
	</div>
	<hr size="2px" color="#EAEAEA" class="main_hr">
	<div class=top_div>
			<img src="images/add.png" class="top_img">
				<p class="top_p" >
					<?php
						echo "联系人：".$row['addpeo'];
											
					?>
				</p>
	</div>
	<hr size="2px" color="#EAEAEA" class="main_hr">
	<div class=top_div>
			<img src="images/add.png" class="top_img">
				<p class="top_p" >
					<?php
						echo "联系电话：".$row['addtel'];
											
					?>
				</p>
	</div>
	<hr size="6px" color="#EAEAEA" class="main_hr">
		<div style="height:<?php $sum=count($rows)*40+155; echo $sum.'px'?>">
		<?php
		$sum=0;
		
		foreach ( $rows as $v ) {
			$sum+=$v['price'];
			?>
		<div class="main_div">
			<p class="p1" align="center"><?php echo $v['name']?></p>
			<p class="p2" align="center">×<?php echo $v['num']?>kg（个）</p>
			<p class="p3" align="center">价格：<?php echo $v['price']?>元</p>
		</div>
		<hr color="#EAEAEA" size="1px" class="main_hr">
		<?php
		}
		?>
		</div>
		<hr size="2px" color="#EAEAEA" class="main_hr">
		<div class=add_div>
		
				<p class="top_p" style="font-size: 18px">请输入最终价格：</p>
					
				<p class="contact-input">
					<input type="text" id="lastprice" name="lastprice" placeholder="请输入最终价格" autofocus>

				</p>
				
				<input type="button" id="sumbit" value="提交" class="push_button red">	
		</div>
			
</body>
<script>
	$(function(){
		$("#sumbit").click(function(){ 
			alert("提交成功，请客户确认")
			var id=<?php echo $pid;?>;
			var sum=$("#lastprice").val();
			$.ajax({
				type: "post",
				async: false,
				url: "hs_check.php",
				data: {
					id:id,
					action: "lastprice",
					sum:sum
				},
				dataType: "json",
				success: function (msg) {
					find();
				}
			});
		});
		function find() {
		setInterval(function(){
				$.ajax({
					type: "post",
					async: false,
					url: "hs_check.php",
					data: "id=<?php echo $pid;?>"+"&action=finish",
					dataType: "json",
					success: function ( msg ) {
						var s=msg;
						if(s==0){
							
						}else{
							if(confirm("订单已完成是否继续接单")){
								$.ajax	({
									type: "post",
									async: false,
									url: "hs_check.php",
									data: "action=free",
									dataType: "json",
									success: function ( msg ) {
										window.location.href='hs.my.php';
									}
								});
							}else{
								window.location.href='hs.my.php';
							}
							
						}
							
						
					}
				});
       		},2000);    
		}
		
	});
	
</script>



</html>