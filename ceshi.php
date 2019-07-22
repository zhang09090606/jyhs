<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>派单</title>
	<script src="js/jquery-1.9.1.min.js"></script>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
</head>

<body>
	<div id="reboot_pre" style="width: 450px; height: 200px; margin-left:auto; margin-right:auto; margin-top:200px; visibility:hidden; background: #F0F0F0; border:1px solid #00DB00; z-index:9999">
		<div style="width: 450px; height: 30px; background:#00DB00; line-height:30px;text-align: center;"><b>派单中</b>
		</div>
		<br/><br/>
		<div>
			<p style="margin-left:50px">正在努力为您寻找回收员...请耐心等待 <span id="reboot_pre_time">15</span> 秒</p>
		</div>
		<br/>
		<div><button type="button" style="width:90px; height:30px; margin-left:340px" onclick="reboot_cancel()">取消订单</button>
		</div>
	</div>
	<div id="reboot_ing" style="width: 450px; height: 150px; margin-left:auto; margin-right:auto; margin-top:-150px; visibility: hidden; background: #F0F0F0; border:1px solid #00DB00">
		<div style="width: 450px; height: 30px; background:#00DB00; line-height:30px;text-align: center;"><b>进行中</b>
		</div>
		<br/>
		<div id="progress_reboot" style="margin-left:40px;color:#00DB00;font-family:Arial;font-weight:bold;height:18px">|</div>
		<br/>
	</div>
	<script type="text/javascript">
		var cancel_flag = 0;
		var already = 0;

		/* 网页一加载就执行的操作 */
		window.onload = reboot();

		/* 重启按钮的单击操作 */
		function reboot() {

			document.getElementById( "reboot_pre_time" ).innerHTML = 0;

			document.all.progress_reboot.innerHTML = "|";
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
					
					delay++;
					document.getElementById( str ).innerHTML = delay;
					setTimeout( "delayPre_reboot('reboot_pre_time')", 1000 );
				} else {
					
				}
			}
		}

		function reboot_cancel() {
			cancel_flag = 1;
			hideDiv( "reboot_pre" );
			alert( "您已经成功取消了派单操作！" );
		}

		function showDiv( str ) {
			document.getElementById( str ).style.visibility = "visible";
		}
	
		function hideDiv( str ) {
			document.getElementById( str ).style.visibility = "hidden";
		}
	</script>
</body>

</html>