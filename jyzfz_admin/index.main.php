<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>管理首页</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="js/sendemail.js" type="text/javascript"></script>
	<script language="javascript" src="js/css.js"></script>
</head>

<body>

	<div id="wrap">

		<div class="tab">

			<ul>

				<li><a href="javascript:void(0);" class="on" onclick="$('#main-lang-1').toggle();">系统信息</a>
				</li>

			</ul>

		</div>

		<div class="main" id="main-lang-1">

			<table width="100%" border="0" cellspacing="1" cellpadding="0" class="mainlist">

				<tr>

					<td width="47%">管理员登录用户名：admin</td>

					<td width="53%">WEB服务器版本：
						<?=$_SERVER["SERVER_SOFTWARE"]?>
					</td>

				</tr>

				<tr>

					<td>服务器主机( IP )：
						<?php echo $_SERVER["REMOTE_ADDR"];?>
					</td>

					<td>服务器端口：
						<?=$_SERVER["SERVER_PORT"]?>
					</td>

				</tr>

				<tr>

					<td>脚本超时时间：
						<?=get_cfg_var("max_execution_time")."秒";?>
					</td>

					<td>脚本运行时可占最大内存：
						<?=get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无"?>
					</td>

				</tr>

				<tr>

					<td>服务器操作系统：
						<?=PHP_OS?>
					</td>

					<td>POST提交内容限制：
						<?=get_cfg_var("post_max_size")?>
					</td>

				</tr>

			</table>

		</div>




		<div class="tab">

			<ul>

				<li><a href="javascript:void(0);" class="on" onclick="$('#main-lang-3').toggle();">版权信息</a>
				</li>

			</ul>

		</div>

		<div class="main" id="main-lang-3">

			<table width="100%" border="0" cellspacing="1" cellpadding="0" class="mainlist">

				<tr>

					<td width="11%">制 作 人 员：</td>

					<td width="89%">张博文、唐珑铭、刘硕、李涵</td>
				</tr>

				<tr>

					<td>开发与支持团队：</td>

					<td><a href='tencent://message/?uin=913473646&Site=在线技术支持&Menu=yes'>追风者团队</a>
					</td>
				</tr>
				<tr>
					<td>官方网站： </td>

					<td><a href="http://www.zhuifengzhe.cn/" target="_blank">http://www.zhuifengzhe.cn/</a> <a href='tencent://message/?uin=913473646&Site=在线技术支持&Menu=yes'>在线技术支持</a> </td>
				</tr>
			</table>
		</div>
	</div>
	</div>
	</div>
	<div id="graybg"> </div>
	<div id="popup_window">
		<div class="popup_window_header"><span class="popup_window_title">感谢您填写反馈信息：</span> <span class="close_div"><a href="javascript:hiddendiv()" ></a></span>
			<div class="cl"></div>
		</div>
		<div class="emailmsg" id="emailmsg"> </div>
	</div>
</body>
<script src="js/index.main.js" type="text/javascript"></script>

</html>