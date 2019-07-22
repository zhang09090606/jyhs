<?php
include("includes/init.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<script src="js/jquery-1.9.1.min.js"></script>
	 <link href="css/score.css" rel="stylesheet" type="text/css" />

	<title>废品车</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>

</head>
<body>
<div class="header_div" align="center">
    <font color="#FFFFFF" size="+3">评价</font>
</div>
<div align="center">
<p style="font-size: 25px;">
	请对回收员的服务做出评价	
</p>
<ul class="rating nostar" id="aa">
	<li class="one"><a href="#" title="1 Star">1</a></li>
	<li class="two"><a href="#" title="2 Stars">2</a></li>
	<li class="three"><a href="#" title="3 Stars">3</a></li>
	<li class="four"><a href="#" title="4 Stars">4</a></li>
	<li class="five"><a href="#" title="5 Stars">5</a></li>
</ul></div>

</body>
<script>
	$(function(){
		$("#aa").click(function(){
			alert("评价成功");
			window.location.href="my.php";
		});
	})
	</script>
</html>
