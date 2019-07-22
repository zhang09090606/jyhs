<?php
include( '../includes/init.php' );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "jfshop", "id=$id" );
?>
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
				<li><a href="menu.inc.php">物品添加管理</a>
				</li>
				<li><a href="javascript:;" class="on">积分商城管理</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：菜单名称不能为空；
			</fieldset>
			<form class="demoform" action="jfshop_check.php" method="post" name="myform" enctype="multipart/form-data">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">物品名称：</td>
						<td><input name="name" type="text" id="name" value="<?php echo $row['name']?>" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">兑换所需绿化值：</td>
						<td><input type="text" name="need" id="need" size="20" value="<?php echo $row['need']?>"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">物品剩余数量：</td>
						<td><input type="text" name="num" id="num" size="20" value="<?php echo $row['num']?>"/>
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
						<td><input type="submit" class="button" value="修改管理"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="edit"/>
							<input type="hidden" name="gid" value="<?php echo $row['id']?>"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	
</body>
<script src="js/ajax_jfshop.edit.js"></script>
</html>