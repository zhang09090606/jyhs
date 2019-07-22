<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>无标题文档</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
	<link href="css/register.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	
</head>

<body>
	<div class="header_div" align="center" >
		<font color="#FFFFFF" size="+3">注册</font>
	</div>
	<div>
		<p>我们已给手机号码
			<font color="#FB750D">+86
				<?php echo $_GET['tel']?>
			</font>发送了一个4位验证码</p>
		<p class="main_p" align="center">输入短信验证码:
			<p>
				<form action="register_check.php" method="post">
					<div class="main">
						<input name="yzm"   class="main_input2" placeholder="请填写验证码" maxlength="4">
					</div>
					<hr size="1px" color="#65C257" align="center" width="96%">
					<input class="register" type="button" id="btn" value="重新发送" onclick="settime(this)" />
							<br>
							<input type="submit" name="submit" id="submit" value="下一步" class="push_button red">
							<input type="hidden" name="action" value="check"/>
							<input type="hidden" name="tel" value="<?php echo $_GET['tel']?>"/>
				</form>
	</div>
	<script type="text/javascript">
		var countdown = 5;
		document.getElementById('btn').click();
		function settime( obj ) {
			
			if ( countdown == 0 ) {
				obj.removeAttribute( "disabled" );
				obj.value = "免费获取验证码";
				countdown = 60;
				$("#btn").click(function(){
					$.ajax({
						type: "post",
						url: "register_check.php",
						data: {tel:"<?php echo $_GET['tel']?>",action:"send"},
						dataType: "json",
					});
				});
				
				return;
			} else {	
				obj.setAttribute( "disabled", true );
				obj.value = "重新发送(" + countdown + ")";
				countdown--;
				
			}
			setTimeout( function () {
				settime( obj )
			}, 1000 )
		}
	</script>
</body>

</html>