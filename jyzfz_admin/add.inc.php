<?php
include( "../includes/init.php" );
include( '../includes/page.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>地址信息管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="css/zzstyle.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/Validform_v5.3.2.js"></script>
	<script src="My97DatePicker/WdatePicker.js"></script>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="javascript:void(0);" class="on">地址信息管理</a>
				</li>
				<li><a href="add.temp.add.php">添加地址信息</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<form name="myform" method="post" action="">
				<fieldset>
					<legend>操作提示</legend>
					1：排序只能是数字； 2：用户名称不能留空。<span id="er"></span>
				</fieldset>
				<table cellspacing="0" class="datalist" id="list" width="98%">
					<tr>
						<th width="5%">选择</th>
						<th width="8%">ID</th>
						<th width="18%"> 地址名称 </th>
						<th width="17%">详细地址</th>
						<th width="17%">联系人姓名</th>
						<th width="17%">电话</th>
						<th width="20%">操作</th>
					</tr>
					<?php
					$username = $_GET[ 'username' ];
					$where = "name='$username'";
					$url = "&username=".$username;
					$sql = "select * from lo_add where $where";
					//echo $sql;die;
					$res = $Db->query( $sql );
					$count = $Db->rows( $res );
					$f = new Page( $count, 2, $url );
					$arr = $Db->get_all( "add", $where, "*", "id desc", $f->limit());
					$temp = 0;
					foreach ( $arr as $row ) {
						$temp++;
						?>
					<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
						<td align="center"><input type="checkbox" name="id[]" id="id[]" value="<?php echo $row['id']?>"/>
						</td>
						<td align="center">
							<?php echo $temp?>
						</td>
						<td align="center">
							<?php echo $row['addname']?>
						</td>
						<td align="center">
							<?php echo $row['inf']?>
						</td>
						<td align="center">
							<?php echo $row['peo']?>
						</td>
						<td align="center">
							<?php echo $row['tel']?>
						</td>
						<td align="center">
							<a onclick="return confirm('确定删除?')" href="add_check.php?id=<?php echo $row['id']?>&amp;action=del&amp;username=<?php echo $username ?>">删除</a> &nbsp;&nbsp;
							<!-- <a onclick="return confirm('确定删除?')" href="admin_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; -->
							<a href="add.edit.php?id=<?php echo $row['id']?>" title="修改" class="thickbox">修改</a> &nbsp;</td>
					</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="4" align="center"><a href="javascript:alls()">全选</a> <a href="javascript:invert()">反选</a> <a href="javascript:removeall()">取消</a> <a href="javascript:dels('add_check.php?action=del_all&username=<?php echo $username?>')">删除</a>
						</td>
						<td colspan="2" align="center">
							<?php echo $f->PageShow()?>
						</td>
						<td align="center">&nbsp;</td>
						<td align="center">&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
<script src="js/ajax_add.inc.js"></script>

</html>