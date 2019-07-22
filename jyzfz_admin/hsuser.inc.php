<?php
include( "../includes/init.php" );
include( '../includes/page.php' );
?>
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
				<li><a href="javascript:void(0);" class="on">回收员管理</a>
				</li>
				<li><a href="hsuser.add.php">添加回收员</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：排序只能是数字； 2：用户名称不能留空。<span id="er"></span>
			</fieldset>
			<table cellspacing="0" class="datalist" id="list" width="98%">
				<tr>
					<th width="5%">ID</th>
					<th width="15%"> 用户用户名 </th>
					<th width="7%">真实姓名 </th>
					<th width="13%">身份证号</th>
					<th width="5%">星级</th>
					<th width="12%">电话</th>
					<th width="5%">是否空闲</th>
					<th width="10%">地址</th>
					<th width="15%">操作</th>
				</tr>
				<?php
				$sql = "select * from lo_hsuser";
				$res = $Db->query( $sql );
				$count = $Db->rows( $res );
				Page( $count, 2, "hsuser.inc.php" );
				$arr = $Db->get_all( "hsuser", "", "*", "id desc", $limit_first );
				$num = 0;
				foreach ( $arr as $row ) {
					$num++;
					?>
				<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
					<td align="center">
						<?php echo $num?>
					</td>
					<td align="center">
						<?php echo $row['username']?>
					</td>
					<td align="center">
						<?php echo $row['name']?>
					</td>
					<td align="center">
						<?php echo $row['idcard']?>
					</td>
					<td align="center">
						<?php echo $row['star']?>
					</td>
					<td align="center">
						<?php echo $row['tel']?>
					</td>
					<td align="center">
						<?php echo $row['isfree']?>
					</td>
					<td align="center">
						<?php echo $row['addname']?>
					</td>
					<td align="center">
						<a onclick="return confirm('确定删除?')" href="hsuser_check.php?id=<?php echo $row['id']?>&amp;action=del&amp;username=<?php echo $row['username']?>">删除</a> &nbsp;&nbsp;
						<!-- <a onclick="return confirm('确定删除?')" href="admin_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; -->
						<a href="hsuser.edit.php?id=<?php echo $row['id']?>" title="修改密码" class="thickbox">修改</a> &nbsp;</td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="6" align="center">
						<?php echo $pagenav?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>

</html>