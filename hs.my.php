<?php
include("includes/init.php");
if(empty($_SESSION['hsname'])){
    $Db->back_info("请您先登录","login.php");
}
$name=$_SESSION['hsname'];	

$row = $Db->get_one("hsuser","username='$name'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transi	tional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/hsuser.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/my.js" type="text/javascript"></script>
<title>我的</title>
</head>
<body>
	<div class="head" align="center"><font color="#FFFFFF" size="+2">我的</font></div>
	<div class="div1">
		<img src="images/hsuser.png" class="div1_image">
		<span class="div1_font"><?php echo $row['name'];?></span>
		
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onClick="location='hs.order.all.php'">
		<img class="main_img" src="images/dingdan.png" width="40px" height="40px">	
		<p class="main_p">废品订单</p>
		<div class="div_div" >
		<img src="images/arrow.png" class="main_arrow">
			<p class="main_all_p">查看所有订单</p>
		</div>
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onClick="location='hs.order.run.php'">
		<img src="images/wait.png" class="main_img">
		<p class="main_p">正在进行的订单</p>
		<img src="images/arrow.png" class="main_arrow">
	</div>
	<hr color="#EAEAEA" size="1px">
	<div class="main_div"  onClick="location='hs.order.finish.php'">
		<img src="images/hs.run.png" class="main_img">
		<p class="main_p">已完成订单</p>
		<img src="images/arrow.png" class="main_arrow">
	</div>
	<hr color="#EAEAEA" size="4px">
	<div class="main_div" onClick="location='hs.setup.php'">
		<img src="images/hajk.png" class="main_img">
		<p class="main_p">设置</p>
		<img src="images/arrow.png" class="main_arrow">
	</div>
	<hr color="#EAEAEA" size="4px">
	<input id="button" type="submit" name="submit" id="submit" value="开始接单" class="push_button red">
</body>
<script>
	$(function(){
		$("#button").click(function(){
			var s=$(this).css("background-color");
			if(s=='rgb(255, 255, 255)'){
				$(this).css("background-image","-webkit-linear-gradient(top,#FC0206, #F75704)");
				$(this).css("background-color","rgb(255, 255, 220)");
				$(this).val("停止接单");
				$.ajax	({
					type: "post",
					async: false,
					url: "hs_check.php",
					data: "action=free",
					dataType: "json",
					success: function ( msg ) {
						find();
					}
				});
				
			}else{
				$(this).css("background-image","-webkit-linear-gradient(top, #57cf22,  #65c257)");
				$(this).css("background-color","rgb(255, 255, 255)");
				$(this).val("开始接单");
				$.ajax	({
					type: "post",
					async: false,
					url: "hs_check.php",
					data: "action=buzy",
					dataType: "json",
					success: function ( msg ) {
					}
				});
			}
		})
		if('<?php echo $row['isfree']?>'=='是'){
			$("#button").click();
			
		}
		
		function find() {
		setInterval(function(){    
				$.ajax	( {
					type: "post",
					async: false,
					url: "hs_check.php",
					data: "id=<?php echo $row['id'];?>"+"&action=ajax",
					dataType: "json",
					success: function ( msg ) {
						 if(msg!=false){
							var pid=msg;
							window.location.href="hs.run.php?id="+pid;
						}
					}
				});
       		},2000); 
			aaa();
			var arr;
			function aaa(){
				
				$.ajax	( {
						type: "post",
						async:false,
						url: "hs_check.php",
						data:"id=<?php echo $row['id'];?>"+"&action=ajax2",
						dataType: "json",
						success: function ( msg ) {
								if(msg!=false){
									arr=msg;
									xun();
									
								}
						}
					});
			
			
			}
			var temp=0;
			function xun(){
				var time=setInterval(function(){
							clearInterval(time);
							var sum="新的预约单：地址为："+arr[temp]['addname']+arr[temp]['addinf']+",预约时间为："+arr[temp]['ytime']+"确认接单点击确定";
							
							var cid=arr[temp]['id'];
							temp++;
							if(confirm(sum)){
								$.ajax	( {
								type: "post",
								async: false,
								url: "hs_check.php",
								data: "id="+cid+"&action=agree",
								dataType: "json",
								success: function ( msg ) {	
										var pid=msg;
										window.location.href="hs.run.php?id="+pid;	
								}
							});
								
							}else{
								if(temp!=arr.length){
									xun();
								}
							}
						
								
				},5000); 
			
			}		
		}
	})
</script>
</html>
