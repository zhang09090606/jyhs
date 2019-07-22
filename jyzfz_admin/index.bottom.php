<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>底部</title>
	<link rel="stylesheet" type="text/css" href="css/top.css"/>
</head>

<body oncontextmenu="return false" ondragstart="return false" onSelectStart="return false" style="font-size:12px">
	<div class="bott">
		<div class="bott_ban" id="bott_ban1"><a href='tencent://message/?uin=913473646&Site=在线技术支持&Menu=yes'>联系我们</a>
		</div>
		<div class="bott_shi">今天是：<span id=mytime></span>
			<script type="text/javascript">
				function showLocale( objD ) {
					var str, colorhead, colorfoot;
					var yy = objD.getYear();
					if ( yy < 1900 ) yy = yy + 1900;
					var MM = objD.getMonth() + 1;
					if ( MM < 10 ) MM = '0' + MM;
					var dd = objD.getDate();
					if ( dd < 10 ) dd = '0' + dd;
					var hh = objD.getHours();
					if ( hh < 10 ) hh = '0' + hh;
					var mm = objD.getMinutes();
					if ( mm < 10 ) mm = '0' + mm;
					var ss = objD.getSeconds();
					if ( ss < 10 ) ss = '0' + ss;
					var ww = objD.getDay();
					if ( ww == 0 ) ww = "星期日";
					if ( ww == 1 ) ww = "星期一";
					if ( ww == 2 ) ww = "星期二";
					if ( ww == 3 ) ww = "星期三";
					if ( ww == 4 ) ww = "星期四";
					if ( ww == 5 ) ww = "星期五";
					if ( ww == 6 ) ww = "星期六";
					colorfoot = "</font>"
					str = yy + "年" + MM + "月" + dd + "日 " + hh + ":" + mm + ":" + ss + "  " + ww;
					return ( str );
				}

				function tick() {
					var today;
					today = new Date();
					document.getElementById( "mytime" ).innerHTML = showLocale( today );
					window.setTimeout( "tick()", 1000 );
				}
				tick();
			</script>
			<script language="javascript" src="js/left.js"></script>
		</div>
	</div>
</body>

</html>