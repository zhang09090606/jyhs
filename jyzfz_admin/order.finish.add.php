<?php
include( "../includes/init.php" );
$username = $_GET[ 'username' ];
$hsuser=$_GET['hsuser'];
$add=$Db->get_all('add',"name='$username'");
$arr=$Db->get_all('case',"name='$username'");
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
	<script  src="My97DatePicker/WdatePicker.js"></script>
	<script>
		$(function(){
		$("#select").change(function(){
			$("#chu").hide();
			var id=$(this).val();
			var shu	=id.split(" ");
			$("#tel").val(shu[0]);
			$("#peo").val(shu[1]);
			$("#addid").val(shu[2]);
		});
		});
							
	</script>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				 <li><a href="add.add.php" class="on">添加交易信息</a>
					</li>
					<li><a href="add.add.php">修改交易订单</a>
					</li>
					<li><a href="add.add.php" >查看未支付订单</a>
					</li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：菜单名称不能为空；
			</fieldset>
			<form action="order_check.php" method="post" name="myform" class="demoform">
				<table cellspacing="0" class="sub">
					<tr>
						<td>请选择交易地址信息</td>
						<td>
						<select id="select">
							<option id="chu">请选择</option>
							<?php	
								foreach($add as $v){
									
							?>
							<option value="<?php echo $v['tel']?> <?php echo $v['peo']?> <?php echo $v['id']?>"><?php echo $v['addname']?>	<?php echo $v['inf']?></option>	
						
							<?php
								}
							?>	
						</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right" >联系人：</td>
						<td><input name="peo" type="text" id="peo" value=""  readonly  size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">用户联系电话：</td>
						<td><input name="tel" type="text" id="tel" value="" readonly size="20" readonly/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">开始交易时间：</td>
						<td>
  					  <input name="stime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px"/>
						</td>
						<td></td>
					</tr>
                    <tr>
                        <td width="100" align="right">接单时间：</td>
                        <td>
                            <input name="jtime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px"/>
                        </td>
                        <td></td>
                    </tr>
					<tr>
						<td width="100" align="right">交易完成时间：</td>
						<td> 
  					  <input name="ftime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px"/>   
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">预订到达时间：</td>
						<td> 
  					  		<input name="ytime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px"/>   
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">交易的物品：</td>
						<td> 
						<?php foreach($arr as $v){?>
					
							<input type="checkbox" name="con[]" value="<?php echo $v['id']?>">
							<?php echo $v['class']?>	<?php echo $v['num']?>kg(个)	<?php echo $v['price']?>元
							<br>
						<?php }?>
						</td>
						<td></td>
					</tr>
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="提交"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="finish"/>
						</td>
						<input type="hidden" name="addid" id="addid" value=""/>
						<input type="hidden" name="username" value="<?php echo $username ?>"/>
						<input type="hidden" name="hsuser" value="<?php echo $hsuser?>"/>
						</td>

					</tr>
				</table>
			</form>
		</div>
	</div>
</body>

</html>