<?php
include( '../includes/init.php' );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "waste", "id=$id" );
$pic = $row[ 'pic' ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>废品修改</title>
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
				<li><a href="waste.add.php">添加废品信息</a>
				</li>
				<li><a href="waste.inc.php">废品信息管理</a>
				</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：菜单名称不能为空；
			</fieldset>
			<form action="waste_check.php?pic=<?php echo $pic?>" method="post" name="myform" class="demoform" enctype="multipart/form-data">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">选择分类：</td>
						<td>
							<select name="parentid" id="parentid">
         	  <option value="<?php echo $row['class']?>">
           	  <?php 
				if($row['class']==1){
					echo "废纸";
				}else if($row['class'==2]){
					echo "塑料制品";
				}else if($row['class'==3]){
					echo "废纺织品";
				}else if($row['class'==4]){
					echo "废金属";
				}else if($row['class'==5]){
					echo "废家具";
				}else if($row['class'==6]){
					echo "废手机";
				}else if($row['class'==7]){
					echo "废家电";
				}
				?>
           	  </option>
              <option value="1">废纸</option>
			  <option value="2">塑料制品</option>
			  <option value="3">废纺织品</option>
			  <option value="4">废金属</option>
			  <option value="5">废家具</option>
			  <option value="6">废手机</option>
          </select>
						
						</td>
					</tr>
					<tr>
						<td width="100" align="right">废品名称：</td>
						<td><input name="name" type="text" id="name" value="<?php echo $row['name']?>" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">废品价格：</td>
						<td><input type="text" name="price" id="password" size="20" value="<?php echo $row['price']?>"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">价格为空时的提示信息：</td>
						<td><input name="inf" type="text" id="inf" size="20" value="<?php echo $row['inf']?>"/>
						</td>
						<td></td>
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
<script src="js/ajax_waste.edit.js"></script>

</html>