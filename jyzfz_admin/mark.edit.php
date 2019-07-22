<?php
include( "../includes/init.php" );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "marks", "id=$id" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>新闻管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="kindeditor/themes/default/default.css"/>
	<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="mark.inc.php">规则修改</a>
				</li>
				<li><a href="mark.add.php" class="on">添加规则</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：新闻名称不能为空；
			</fieldset>
			<form action="mark_check.php" method="post" name="myform">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">栏目名称：</td>
						<td><input type="text" name="name" size="60" value="<?php echo $row['cname']?>"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<tr>
							<td width="100" align="right">新闻标题：</td>
							<td><input type="text" name="title" size="60" value="<?php echo $row['title']?>"/> </td>
							<td></td>
						</tr>
						<tr>
							<td width="100" align="right">内容：</td>
							<td>
								<textarea name="content" style="width:750px;height:450px;display:none;" id="content">
									<?php echo $row['content']?>
								</textarea>
							</td>
						</tr>
						<tr class="bg2">
							<td></td>
							<td>&nbsp;</td>
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
<script src="js/kin_mark.edit.js"></script>

</html>