<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>角色管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="admin.inc.php">管理员管理</a>
				</li>
				<li><a href="admin.add.php">添加管理员</a>
				</li>
				<li><a href="javascript:void(0);" class="on">修改密码</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：角色名称不能为空；
			</fieldset>
			<form action="admin_check.php" method="post" name="myform">
				<input type="hidden" name="do_submit" value="1"/>
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">要修改的账号：</td>
						<td><input type="text" name="username" value="" size="20"/>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">新密码：</td>
						<td><input type="password" name="password" id="password" size="20"/>
							<span id="err_p_s"></span>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">确认密码：</td>
						<td><input type="password" name="password_t" id="password_t" size="20"/>
							<span id="error_password_t"></span>
						</td>
					</tr>
					<!--
        <tr>
          <td align="right">权　　限：</td>
          <td><input type="checkbox" name="level_s[]" value="" ></td>
        </tr>
-->

					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="修改管理"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="gid" value=""/>
							<input type="hidden" name="action" value="edit"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>

</html>