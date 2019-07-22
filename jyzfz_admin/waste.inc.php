<?php
include( "../includes/init.php" );
include( '../includes/page.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>废品信息</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/waste.inc.js"></script>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="waste.add.php">添加废品信息</a>
				</li>
				<li><a href="waste.inc.php" class="on">废品信息管理</a>
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
					<th width="8%">ID</th>
					<th width="8%">分类</th>
					<th width="8%">废品名称</th>
					<th width="8%"> 废品价格</th>
					<th width="9%">废品备注信息</th>
					<th width="10%">废品图片</th>
					<th width="19%">操作</th>
				</tr>
				<?php
				$sql = "select * from lo_waste ";
				$res = $Db->query( $sql );
				$count = $Db->rows( $res );
				Page( $count, 5, "waste.inc.php" );
				$arr = $Db->get_all( "waste", "", "*", "id desc", $limit_first );
				foreach ( $arr as $row ) {

					?>
				<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
					<td align="center">
						<?php echo $row['id']?>
					</td>
					<td align="center">
						<?php

						if ( $row[ 'class' ] == 1 ) {
							echo "废纸";
						} else if ( $row[ 'class' ] == 2 ) {
							echo "塑料制品";
						} else if ( $row[ 'class' ] == 3 ) {
							echo "废纺织品";
						} else if ( $row[ 'class' ] == 4 ) {
							echo "废金属";
						} else if ( $row[ 'class' ] == 5 ) {
							echo "废家具";
						} else if ( $row[ 'class' ] == 6 ) {
							echo "废手机";
						} else if ( $row[ 'class' ] == 7 ) {
							echo "废家电";
						}
						?>
					</td>
					<td align="center">
						<?php echo $row['name']?>
					</td>
					<td align="center">
						<?php echo $row['price']?>
					</td>
					<td align="center">
						<?php echo $row['inf']?>
					</td>
					<td align="center">
						<?php echo $row['pic']?>
					</td>

					<td align="center">
						<a id="delete" href="waste_check.php?id=<?php echo $row['id']?>&amp;action=del&amp;class=<?php echo $row['class']?>">删除</a> &nbsp;&nbsp;
						<!-- <a onclick="return confirm('确定删除?')" href="menu_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; -->
						<a href="waste.edit.php?id=<?php echo $row['id']?>" title="修改密码" class="thickbox">修改</a> &nbsp;</td>
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


</html>