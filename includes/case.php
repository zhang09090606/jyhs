 <?php
 include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
 $name = $_SESSION[ 'name' ];
 $rows = $Db->get_all( "case", "name='$name'" );
 $sum = 0;
$max=0;
 foreach ( $rows as $v ) {
 	$sum += $v[ 'price' ];
	$max=$sum;
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="css/case.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	
	<title>废品车</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
	<script>
		$(function(){
			$("#show").click(function(){
				$(".push_button").css("display","block");
			});
			$("input[id='delete']").click(function(){	
				var id=$(this).next().val(); 
				$.ajax( {
					type: "post",
					async: true,
					url: "case_check.php",
					data: "id=" + id + "&action=casedelete",
					dataType: "json",
					success: function(msg){
						window.location.reload();
					}
				} );
			});
		});
		$( function () {
			$( ".rdo" ).change( function () {
				var id = this.value;
				var state = false
				var sum = $( "#price" ).html();
				sum = sum.replace( /(^\s*)|(\s*$)/g, "" );

				if ( $( this ).is( ":checked" ) ) {
					state = true;
				}
				$.ajax( {
					type: "post",
					async: true,
					url: "case_check.php",
					data: "id=" + id + "&action=s&sum=" + sum + "&state=" + state,
					dataType: "json",
					success: function ( msg ) {
						$( "#price" ).html( msg );
						sum = msg;

					}
				} );
			} )
			$( "#selectAll" ).change( function () {
				if ( $( this ).is( ":checked" ) ) {
					$( "#price" ).html( <?php echo $max?> );
				}else{
					$( "#price" ).html("0");
				}
			});
		} )

		function checkAll()
			{
			var checkedOfAll=$("#selectAll").prop("checked");
			$("input[name='rdo[]']").prop("checked", checkedOfAll);
			} 
	</script>
</head>

<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">废品车</font>
		<font color="#FFFFFF" size="+1" class="show" id="show">管理</font>
	</div>
	<div align="center" <?php if($rows){echo "hidden";}?>> 
	<img src="images/casek.png" class="empty_img">
	<br>
	<p class="empty_p">
		废品车还没有废品,赶快去回收吧
	</p>
	</div>
	<div class="main" style="height: <?php $sum=count($rows)*160;echo $sum;?>">
	<form action="case.send.php" method="post">
	<?php
	foreach ( $rows as $v ) {
		$class = $v[ 'class' ];
		$arr = $Db->get_one( "waste", "name='$class'" );
		$row = $Db->get_one( "case", "class='$class'" );

		?>
	<div class="main_div">
		<input type="checkbox" id="checkbox" value="<?php echo $row['id']?>" class="rdo" name="rdo[]" checked>
		<div class="main_div2"><img src="<?php if($arr){echo $arr['pic'];}else{echo 'images/other.jpg';}?>">
		</div>
		<div class="main_div3">
			<p>
				<?php echo $row['class']?>
			</p>
			<p>数量：
				<?php echo $row['num']?>kg(个)</p>
			<p>价格为：
				<?php echo $row['price']?>元</p>
		</div>
			<input hidden id="delete" type="button" value="删除" class="push_button red" style="width: 50px;height: 25px;font-size: 15px;line-height: 30px;margin: 0px;float:right;right: 10px;top:50px">
			<input name="id" id="id" value="<?php echo $v['id']?>" hidden>

	</div>
	<hr color="#EAEAEA" size="4px">
	<?php
	}
	?>
	</div>
	<div class="botten_div">
		<div class="botten_top">
			<input type="checkbox" checked class="radio" id="selectAll" name="radio"  onclick="checkAll()" >
			<p class="botten_p">全选</p>
			<input type="submit" class="submit" name="submit" value="结算">
			<div class="price">合计：
				<font color="#F90D11" id="price">
					<?php echo $max?>
				</font>元
			</div>
	</form>
			<div>
		
		<table class="botten_table">
			<tr>
				<td  align="center" id="pic1"><img src="images/botten1.png" id="p1" width="40px" height="40px"></td>
				<td  align="center" id="pic2"><img src="images/botten2.png" id="p2" width="40px" height="50px"></td>
				<td  align="center" id="pic3"><img src="images/botten3.png" id="p3" width="40px" height="40px"></td>
				<td  align="center" id="pic4"><img src="images/botten4.png" id="p4" width="40px" height="40px"></td>
			</tr>
		</table>
		

			</div>
			</div>
			</div>
			<script src="js/case.js" type="text/javascript"></script>
</body>

</html>