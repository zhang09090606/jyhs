<?php
include( '../includes/init.php' );
$id = $_GET[ 'id' ];
$gid = $_GET[ 'gid' ];
$row = $Db->get_one( "case", "id=$gid" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>菜单管理</title>
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
				<li><a href="case.add.php">添加废品信息</a>
				</li>
				<li><a href="javascript:;" class="on">废品箱管理</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：菜单名称不能为空；
			</fieldset>
			<form action="case_check.php" method="post" name="myform" class="demoform" enctype="multipart/form-data">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">选择要添加废品：</td>
						<td>
							<select name="parentid" id="parentid">
             <option value="<?php echo $row['class']?>"><?php echo $row['class']?></option>
              <?php
			  $str=$Db->get_all("waste","class!=0");
              foreach($str as $v){
              ?>
              <option value="<?php echo $v['name']?>"><?php echo $v['name']?></option>
              <?php
              }
              ?>
          </select>
						

						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">废品数量：</td>
						<td><input name="num" type="text" id="num" value="<?php echo $row['num']?>" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="修改管理"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="edit"/>
							<input type="hidden" name="name" value="<?php echo $row['name']?>"/>
							<input type="hidden" name="gid" value="<?php echo $row['id']?>"/>
							<input type="hidden" name="id" value="<?php echo $id ?>"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</body>
<script src="js/ajax_case.edit.js"></script>

</html>