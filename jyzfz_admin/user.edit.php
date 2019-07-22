<?php
include( "../includes/init.php" );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "user", "id=$id" );
$name = $row[ 'name' ];
$pwd = $row[ 'pwd' ];
$sex = $row[ 'sex' ];
$nickname = $row[ 'nickname' ];
$point = $row[ 'point' ];
$isadd = $row[ 'isadd' ];
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
				<li><a href="user.inc.php" class="on">用户信息管理</a>
				</li>
				<li><a href="user.add.php" >添加用户</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：角色名称不能为空；
			</fieldset>
			<form action="user_check.php" method="post" name="myform" class="demoform">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">用户手机号：</td>
						<td><input type="text" name="name" value="<?php echo $name?>" size="20"/>
							<td></td>
					</tr>
					<tr>
						<td width="100" align="right">新密码：</td>
						<td><input type="password" name="pwd" id="password" value="<?php echo $pwd?>" size="20"/>
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right">确认密码：</td>
						<td><input type="password" name="repwd" id="password_t" value="<?php echo $pwd?>" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">性别</td>
						<td>
							<input type="radio" name="sex" id="" value="男" <?php if($sex=="男" ){echo "checked";}?>>男
							<input type="radio" name="sex" id="" value="女" <?php if($sex=="女" ){echo "checked";}?>>女
							<td></td>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">昵称：</td>
						<td><input type="text" name="nickname" id="nickname" size="20" value="<?php echo $nickname?>"/>
							<td></td>
					</tr>
					<tr>
						<td width="100" align="right">绿化值：</td>
						<td><input type="text" name="point" id="point" size="20" value="<?php echo $point?>"/>
							<td></td>
					</tr>
					<tr>
						<td width="100" align="right">是否注册地址：</td>

						<td><input type="radio" name="isadd" id="" value="是" <?php if($isadd=="是" ){echo "checked";}?>>是
							<input type="radio" name="isadd" id="" value="否" <?php if($isadd=="否" ){echo "checked";}?>>否
							<td> </td>
					</tr>
				 <tr class="bg2">
					<td></td>
					<td><input type="submit" class="button" value="添加管理"/>
						<input type="reset" class="button" value="取消返回"/>
						<input type="hidden" name="gid" value="<?php echo $id?>"/>
						<input type="hidden" name="action" value="edit"/>
						
					</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
<script src="js/ajax_user.edit.js"></script>

</html>