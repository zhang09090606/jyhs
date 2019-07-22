<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'name' ];
 $rows = $Db->get_all( "add", "name='$name'" );
?>


<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/add.inc.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<title>选择收货地址</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>    
	<script src="jyzfz_admin/My97DatePicker/WdatePicker.js"></script>
	
</head>


<body>

	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">地址管理</font>
		<font color="#FFFFFF" size="+1" class="show" id="show">管理</font>
	</div>

	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
	
		<?php
			foreach($rows as $v){
				
		?>
		<div class="main" id="main">
		
			<p><?php echo $v['peo']?>   <?php echo $v['tel']?>	
			<input id="edit" type="button" value="修改" class="push_button red" style="width: 50px;height: 25px;font-size: 15px;line-height: 30px;margin: 0px;float:right;right: 10px" hidden=""><input name="add" id="add" value="<?php echo $v['id']?>" hidden></p>
			<p><?php echo $v['addname']?> <br><br	><?php echo $v['inf']?>
			<input hidden id="delete" type="button" value="删除" class="push_button red" style="width: 50px;height: 25px;font-size: 15px;line-height: 30px;margin: 0px;float:right;right: 10px;top: -20px;">
			<input name="add" id="add" value="<?php echo $v['id']?>" hidden>
			</p>
			
		
		</div>
		
		<hr size="6px" color="#EAEAEA">
		<?php
		}
		?>
	
	 <input type="button" name="submit" id="submit" value="添加新地址" class="push_button red" style="display: block" onClick="location='my.add.add.php'">
	
	<script>
		$(function(){
			$("#show").click(function(){
				$(".push_button").css("display","block");
			});
			$("input[id='edit']").click(function(){	
				var url=$(this).next().val(); 
				window.location.href="my.add.edit.php?id="+url;
			});$("input[id='delete']").click(function(){	
				var id=$(this).next().val(); 
				$.ajax( {
					type: "post",
					async: true,
					url: "my.add_check.php",
					data: "id=" + id + "&action=delete",
					dataType: "json",
					success: function(msg){
						window.location.reload();
					}
				} );
			});
			$(".arrow").click(function(){
				$(this).css("background","#E4E4E4");
				
			});
		});
	</script>
</body>

</html>