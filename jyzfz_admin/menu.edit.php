<?php
include( '../includes/init.php' );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "menu", "id=$id" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>菜单管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="menu.inc.php">菜单管理</a>
				</li>
				<li><a href="javascript:;" class="on">编辑菜单</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：菜单名称不能为空；
			</fieldset>
			<form action="menu_check.php" method="post" name="myform">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">菜品名称：</td>
						<td><input name="name" type="text" id="name" value="<?php echo $row['name']?>" size="20"/>
							<span id="usernote">*</span>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">菜品价格：</td>
						<td><input type="text" name="price" id="password" size="20" value="<?php echo $row['price']?>"/>
							<span id="err_p_s"></span>
						</td>
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

</html>