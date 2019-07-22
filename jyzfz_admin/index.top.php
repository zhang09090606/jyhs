<?php

session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>头部</title>

	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

	<link rel="stylesheet" type="text/css" href="css/top.css"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script language="javascript" type="text/javascript" charset="utf-8" src="js/topmenu.js"></script>

</head>

<body oncontextmenu="return false" ondragstart="return false" onSelectStart="return false">
	<div class="top_box">
		<div class="top_logo"></div>
		<div class="top_nav">
			<div class="top_nav_sm">
				你好！[
				<font color="#dc143c" size="+2">
					<?php echo $_SESSION['username']?>
				</font>]管理员 &nbsp;&nbsp;&nbsp;&nbsp; <a href="../index.html" target="_blank">网站首页</a> | <a href="index.php" target="_blank">官方网站</a> | &nbsp;
			</div>
			<div class="top_nav_xm">
				<div class="navtit" id="navtit">
					<span onclick="changeMenu(this);" class="hover"><a href="javascript:void(0);" onclick="goindex()"><i>后台首页</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=admin" target='leftFrame'><i>管理员管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=user" target='leftFrame'><i>用户信息管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=inf" target='leftFrame'><i>信息管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=address" target='leftFrame'><i>地址信息管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=jyinf" target='leftFrame'><i>用户交易信息管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=jfshop" target='leftFrame'><i>积分商城管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=class" target='leftFrame'><i>首页分类管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=waste" target='leftFrame'><i>废品信息管理</i></a></span>
					<span onclick="changeMenu(this);"><a href="index.left.php?menu=Wastebox" target='leftFrame'><i>废品箱管理</i></a></span>
				</div>
			</div>

		</div>
		<div class="top_bar"><input onClick="switchBar(this)" type="button" value="关闭左边菜单" name="SubmitBtn" class="bntof"/>
			<div class="top_she">
				<a href="javascript:void(0);" onClick="self.top.location.href='logout.php'">安全注销</a>
				<a href="admin.edit.inc.php?username=" target='main'>修改密码</a>

			</div>
		</div>
	</div>

</body>	
<script type="text/javascript" src="js/index.top.js"></script>

</html>