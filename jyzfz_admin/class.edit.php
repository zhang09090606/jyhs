<?php
include( '../includes/init.php' );
$id = $_GET[ 'id' ];
$classname = $_GET[ 'classname' ];
$urls = $_GET[ 'urls' ];
//查找父类的信息
$parentid = $_GET[ 'parentid' ];
$row = $Db->get_one( "class", "id=" . $parentid );
$pid = $row[ 'id' ];
$pclassname = $row[ 'classname' ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>分类管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="class.inc.php">分类管理</a>
				</li>
				<li><a href="class.add.php" class="on">修改分类</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：分类名称不能为空；
			</fieldset>
			<form action="class_check.php" method="post" name="myform">
				<table cellspacing="0" class="sub">
					<!-- <tr>
          <td align="right">分类类型：</td>
          <td><select name="infotype" id="infotype">
            <option value="1">单页</option>
            <option value="2">列表</option>
          </select></td>
        </tr>-->
					<tr>
						<td width="100" align="right">分类名称：</td>
						<td><input type="text" name="classname" size="20" value="<?php echo $classname?>"/>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">废品图片：</td>
						<td width="100"> <input type="file" name="file" id="file" value="上传图片"/>
						</td>
						<td></td>
					</tr>	
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="修改管理"/>
							<input type="hidden" name="gid" value="<?php echo $id;?>"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="edit"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>

</html>