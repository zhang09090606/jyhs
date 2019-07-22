<?php
include( "../includes/init.php" );
include( '../includes/page.php' );
$id = $_GET[ 'id' ];
$arr = $Db->get_one( "user", "id=$id" );
$name = $arr[ 'name' ];
$nickname = $arr[ 'nickname' ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>废品信息管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-1.9.1.min.js"></script>

</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a id="temp" href="javascript:void(0);" class="on">废品箱管理</a>
				</li>
				<li><a href="case.add.php">添加废品信息</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：该用户名为
				<?php echo $name;?>； 2：昵称为:
				<?php echo $nickname;?><span id="er"></span>
			</fieldset>
			<table cellspacing="0" class="datalist" id="list" width="98%">
				<tr>
					<th width="20%">废品名字</th>
					<th width="20%">废品数量</th>
					<th width="19%">操作</th>
				</tr>
				<?php
				$sql = "select * from lo_case where name='$name'";
				$res = $Db->query( $sql );

				$count = $Db->rows( $res );
				Page( $count, 5, "case.inc.php" );
				$arr = $Db->get_all( "case", "name='$name'", "*", "id desc", $limit_first );

				foreach ( $arr as $row ) {
					?>
				<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
					<td align="center">
						<?php echo $row['class']?>
					</td>
					<td align="center">
						<?php echo $row['num']?>
					</td>
					<td align="center">
						<a id="delete" href="case_check.php?id=<?php echo $row['id']?>&amp;action=del&amp;gid=<?php echo $id?>">删除</a> &nbsp;&nbsp;
						<!-- <a onclick="return confirm('确定删除?')" href="menu_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; -->
						<a href="case.edit.php?gid=<?php echo $row['id']?>&amp;id=<?php echo $id?>" title="修改密码" class="thickbox">修改</a> &nbsp;</td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="7" align="center">
						<?php echo $pagenav?>
					</td>
				</tr>
			</table>
		</div>
	</div>

</body>
<script src="js/case.inc.js"></script>

</html>