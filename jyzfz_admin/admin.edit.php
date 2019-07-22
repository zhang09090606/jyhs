<?php
include( "../includes/init.php" );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "admin", "id=$id" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>角色管理</title>
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
				<li><a href="admin.inc.php">管理员管理</a>
				</li>
				<li><a href="javascript:;" class="on">添加管理员</a>
				</li>
				<li><a href="admin.edit.inc.php">修改密码</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：角色名称不能为空；
			</fieldset>
			<form action="admin_check.php" method="post" name="myform" class="demoform">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">管理账号：</td>
						<td><input type="text" name="username" readonly value="<?php echo $row['username']?>" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">新密码：</td>
						<td><input type="password" name="pwd" id="password" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">确认密码：</td>
						<td><input type="password" name="repwd" id="password_t" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">权限：</td>
						<td>
							<input type="checkbox" name="check[]" value="1"/>管理员管理<br>
							<input type="checkbox" name="check[]" value="2"/>新增用户管理
							<input type="checkbox" name="check[]" value="3"/>查看用户信息
							<input type="checkbox" name="check[]" value="4"/>删除/修改用户信息<br>
							<input type="checkbox" name="check[]" value="5"/>新增规则信息
							<input type="checkbox" name="check[]" value="5"/>查看规则信息
							<input type="checkbox" name="check[]" value="6"/>删除/修改规则信息<br>
							<input type="checkbox" name="check[]" value="7"/>积分商城添加物品
							<input type="checkbox" name="check[]" value="8"/>积分商城查看物品
							<input type="checkbox" name="check[]" value="9"/>积分商城删除/修改物品<br>
							<input type="checkbox" name="check[]" value="10"/>添加地址信息
							<input type="checkbox" name="check[]" value="11"/>查看地址信息
							<input type="checkbox" name="check[]" value="12"/>删除/修改地理信息<br>
							<input type="checkbox" name="check[]" value="13"/>添加用户交易信息
							<input type="checkbox" name="check[]" value="14"/>查看用户交易信息
							<input type="checkbox" name="check[]" value="15"/>删除/修改用户交易信息<br>
							<input type="checkbox" name="check[]" value="16"/>添加废品信息
							<input type="checkbox" name="check[]" value="17"/>查看废品信息
							<input type="checkbox" name="check[]" value="18"/>删除/修改废品信息<br>
							<input type="checkbox" name="check[]" value="19"/>废品箱添加废品
							<input type="checkbox" name="check[]" value="20"/>废品箱查看废品
							<input type="checkbox" name="check[]" value="21"/>废品箱删除/修改废品<br>
						</td>
						<tr class="bg2">
							<td></td>
							<td><input type="submit" class="button" value="修改管理"/>
								<input type="reset" class="button" value="取消返回"/>
								<input name="old_pwd" value="<?php echo $row['pwd']?>" type="hidden"/>
								<input name="gid" value="<?php echo $row['id']?>" type="hidden"/>
								<input type="hidden" name="action" value="edit"/>
							</td>
						</tr>
				</table>
			</form>
		</div>
	</div>

</body>
<script src="js/ajax_admin.edit.js"></script>

</html>