<?php
include( "../includes/init.php" );
include( '../includes/page.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>菜品管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-1.9.1.min.js"></script>

</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a id="temp" href="javascript:void(0);" class="on">废品箱信息管理</a>
				</li>
				<li><a href="menu.add.php">添加废品信息</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：排序只能是数字； 2：用户名称不能留空。<span id="er"></span>
			</fieldset>
			<form action="case_check.php" method="post" name="myform" class="demoform">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">用户用户名：</td>
						<td><input name="name" type="text" id="name" value="" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="查找该用户	"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="check"/>
						</td>
					</tr>
				</table>
				<form>
		</div>
	</div>
</body>

</html>