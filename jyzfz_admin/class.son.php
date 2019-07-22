<?php
include( '../includes/init.php' );
$id = $_GET[ 'id' ];
$classname = $_GET[ 'classname' ];
$path = $_GET[ 'path' ];
$arr = explode( "-", $path );
$length = count( $arr ); //统计数组的长度
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
				<li><a href="class.add.php" class="on">添加分类</a>
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
					<tr>
						<td width="100" align="right">父类名称：</td>
						<td>
							<select name="parentid" id="parentid">
           <option value="<?php echo $id?>"><?php echo $length; echo str_repeat('-->',$length);?>|-<?php echo $classname?></option>
          <!--<option value="0">--一级分类--</option>-->
           <?php
           $rows = $Db->get_all("class","id not in($id)","*,concat(path,'-',id)as paths"," paths asc");
           foreach($rows as $row){
           ?>
          <option value="<?php echo $row['id']?>">
          <?php
          	$arr = explode("-",$row['path']);
			$length = count($arr);//统计数组的长度
			echo $length;
			echo str_repeat('-->',$length);
		  ?>
		  |-<?php echo $row['classname']?>
          </option>
           <?php
           }
           ?>
          </select>
						
						</td>
					</tr>
					<tr>
						<td align="right">分类类型：</td>
						<td>
							<select name="infotype" id="infotype">

								<option value="1">单页</option>
								<option value="2">列表</option>

							</select>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">分类名称：</td>
						<td><input type="text" name="classname" id="password" size="20"/>
						</td>
					</tr>
					<tr>
						<td width="100" align="right">连接地址：</td>
						<td><input type="text" name="urls" size="20"/>
						</td>
					</tr>
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="添加管理"/>
							<input type="reset" class="button" value="取消返回"/>
							<input name="id" value="<?php echo $id?>" type="hidden"/>
							<input name="classnames" value="<?php echo $classname?>" type="hidden"/>
							<input name="path" value="<?php echo $path?>" type="hidden"/>
							<input type="hidden" name="action" value="son"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>

</html>