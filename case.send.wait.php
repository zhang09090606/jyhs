<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$id=$_GET['id'];
$row=$Db->get_one("order","id=$id");
$addlng=$row['addlng'];
$addlat=$row['addlat'];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>派单</title>
	<link href="css/case.wait.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<title>废品车</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
</head>

<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">等待派单</font>
	</div>
	<div id="img" align="center">
		<div class="spinner">
			<div class="spinner-container container1">
				<div class="circle1"></div>
				<div class="circle2"></div>
				<div class="circle3"></div>
				<div class="circle4"></div>
			</div>
			<div class="spinner-container container2">
				<div class="circle1"></div>
				<div class="circle2"></div>
				<div class="circle3"></div>
				<div class="circle4"></div>
			</div>
			<div class="spinner-container container3">
				<div class="circle1"></div>
				<div class="circle2"></div>
				<div class="circle3"></div>
				<div class="circle4"></div>
			</div>
		</div>
	</div>
	<div id="reboot_pre" class="main">
		<div align="center">
			<p>正在努力为您寻找回收员，请耐心等待...<br>请勿关闭此界面,已等待 <span id="reboot_pre_time">15</span> 秒</p>
		</div>
		<br/>
		<div align="center"><button type="button" class="push_button red" onclick="cencel()">取消订单</button>
		</div>
	</div>

	<script type="text/javascript">
		    $(document).ready(function(e) {   
                var counter = 0;  
                if (window.history && window.history.pushState) {  
				 $(window).on('popstate', function () {  
								window.history.pushState('forward', null, '#');  
								window.history.forward(1);  
							 $(window).attr('location','my.php'); 
					});  
				}  
      
                  window.history.pushState('forward', null, '#'); //在IE中必须得有这两行  
                  window.history.forward(1);  
    });  
		var cancel_flag = 0;
		var already = 0;
		window.onload = reboot();
		function reboot() {

			document.getElementById( "reboot_pre_time" ).innerHTML = 0;
			download_flag = 0;
			cancel_flag = 0;
			already = 0;
			setTimeout( "showDiv('reboot_pre')", 500 );
			delayPre_reboot( "reboot_pre_time" );
		}

		function delayPre_reboot( str ) {
			if ( !cancel_flag ) {
				var delay = document.getElementById( str ).innerHTML;
				if ( delay > -1 ) {
					$(function(){
					if("<?php echo $row['ytime']?>"==''){
					$.ajax({
							type: "post",
							async: true,
							url: "case_check.php",
							data: "id=<?php echo $id;?>" + "&action=ajax&addlng="+"<?php echo $addlng?>"+"&addlat="+"<?php echo $addlat?>",
							dataType: "json",
							success: function ( msg ) {
								 if(msg!=0){
									window.location.href="case.last.temp.php";
								 }
							}
					});
					}else{
						  $.ajax({
							type: "post",
							async: true,
							url: "case_check.php",
							data: "id=<?php echo $id;?>" + "&action=ajax2",
							dataType: "json",
							success: function ( msg ) {
								 if(msg!=0){	
									window.location.href="case.last.temp.php";
								 }
							}
						});
					}
					
					delay++;
					document.getElementById( str ).innerHTML = delay;
					setTimeout( "delayPre_reboot('reboot_pre_time')", 1000 );
				}
			)}
		}
		}
		function cencel() {
			if(confirm("您确定要取消订单么？")){
			$(function(){
				$.ajax({
					type: "post",
					async: true,
					url: "case_check.php",
					data: "id=<?php echo $id;?>" + "&action=delete",
					dataType: "json",
					success: function ( msg2 ) {
						window.location.href="case.php";	
					}
				});
				});
			 
		}
		}

		function showDiv( str ) {
			document.getElementById( str ).style.visibility = "visible";
		}	
	</script>
</body>

</html>