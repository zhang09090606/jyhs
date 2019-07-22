<?php
include( "../includes/init.php" );
include( '../includes/page.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>用户登录</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>


</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="javascript:void(0);" class="on">用户登管</a>
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
					<th width="18%">账号</th>
					<th width="17%">IP</th>
					<th width="20%">时间</th>
				</tr>
				<?php
				$sql = "select * from lx_userlog ";
				$res = $Db->query( $sql );
				$count = $Db->rows( $res );
				Page( $count, 2, "admin.login.php" );
				$arr = $Db->get_all( "userlog", "", "*", "id desc", $limit_first );
				foreach ( $arr as $row ) {
					?>
				<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
					<td align="center">
						<?php echo $row['id']?>
					</td>
					<td align="center">
						<?php echo $row['u_name']?>
					</td>
					<td align="center">
						<?php echo $row['u_ip']?>
					</td>
					<td align="center">
						<?php echo date('Y-m-d H:i:s',$row['u_time'])?>
					</td>
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