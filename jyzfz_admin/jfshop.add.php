<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>菜单管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="css/zzstyle.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/Validform_v5.3.2.js"></script>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="jfshop.inc.php">物品信息</a>
				</li>
				<li><a href="jfshop.add.php" class="on">添加物品</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：物品名称最长不超过50字符,汉字占3字符 2：所需绿化值只能为数字且位数小于十位 3：剩余数量只能为数字且位数小于十位 4：图片限制类型只能为png,jpg,jpeg,jif,pjpeg
			</fieldset>
			<form class="demoform" action="jfshop_check.php" method="post" name="myform" enctype="multipart/form-data">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">物品名称：</td>
						<td><input name="name" type="text" id="name" value="" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">兑换所需绿化值：</td>
						<td><input type="text" name="need" id="need" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">物品剩余数量：</td>
						<td><input type="text" name="num" id="num" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">物品图片：</td>
						<td width="100"> <input type="file" name="file" id="file" value="上传图片"/>
						</td>
						<td></td>
					</tr>
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="添加物品"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="add"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
</body>
<script src="js/ajax_jfshop.add.js"></script>
</html>