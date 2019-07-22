<?php
include( '../includes/init.php' );
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
				<li><a href="javascript:void(0);" class="on">分类管理</a>
				</li>
				<li><a href="class.add.php">添加分类</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：排序只能是数字； 2：分类名称不能留空。<span id="er"></span>
			</fieldset>
			<table cellspacing="0" class="datalist" id="list" width="98%">
				<tr>
					<th width="8%">ID</th>
					<th width="15%"> 分类名称 </th>
					<th width="15%">分类类型</th>
					<th width="24%">时间</th>
					<th width="28%">操作</th>
				</tr>
				<?php
				$rows = $Db->get_all( "class", "", "*,concat(path,'-',id)as paths", " paths asc" );
				foreach ( $rows as $row ) {
					?>
				<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
					<td align="center">
						<?php echo $row['id']?>
					</td>
					<td align="left">
						<?php
						$arr = explode( "-", $row[ 'path' ] );
						$length = count( $arr ); //统计数组的长度
						echo $length;
						echo str_repeat( '-->', $length );
						?>
						<?php echo $row['classname']?>
					</td>
					<td align="center">
						<?=$row['infotype']==1 ?'单页':'列表';?>
					</td>
					<td align="center">
						<?php echo $row['postime']?>
					</td>
					<td align="center">
						<a href="class.son.php?id=<?php echo $row['id']?>&amp;classname=<?php echo $row['classname']?>&amp;path=<?php echo $row['path']?>">添加子分类</a> &nbsp;&nbsp;
						<a onclick="return confirm('确定删除?')" href="class_check.php?id=<?php echo $row['id']?>&amp;parentid=<?php echo $row['parentid']?>&amp;action=del">删除</a> &nbsp;&nbsp;
						<a href="class.edit.php?id=<?php echo $row['id']?>&amp;classname=<?php echo $row['classname']?>&amp;parentid=<?php echo $row['parentid']?>&amp;urls=<?php echo $row['urls']?>&amp;infotype=<?php echo $row['infotype']?>" title="修改" class="thickbox">修改</a> &nbsp;</td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="8" align="center"></td>
				</tr>
			</table>
		</div>
	</div>
</body>

</html>