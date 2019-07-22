<?php

session_start();
$arr = $_SESSION[ 'grade' ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>左侧菜单</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/left.css"/>
	<script language="javascript" type="text/javascript" src="js/left.js"></script>
	<script src="js/jquery-1.4.2.min.js"></script>
</head>

<body oncontextmenu="return false" ondragstart="return false" onSelectStart="return false">
	<div class="left_box">
		<?php
		if ( empty( $_GET[ 'menu' ] ) ) {
			?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items1_1")'>常用操作</div>
			<div class="left_box_nr" style='display:block' id='items1_1'>
				<ul>
					<li><a href="config.inc.php?tab=1" target='main'>网站配置</a>
					</li>
					<li> <a id="c8" href="jfshop.inc.php" target='main'>查看留言</a>
					</li>
					<li> <a id="c22" href="mark.inc.php" target="main">修改规则信息</a>
					</li>
					<li> <a id="c17" href="waste.inc.php" target='main'>废品信息修改</a>
					</li>
					<li> <a id="c8" href="jfshop.inc.php" target='main'>积分商城物品信息管理</a>
					</li>
					<li> <a id="c8" href="jfshop.inc.php" target='main'>查看未付款订单</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items2_1")'>管理资料</div>
			<div class="left_box_nr" style='display:block' id='items2_1'>
				<ul>
					<li> <a href="admin.edit.inc.php" target='main'>修改密码</a>
					</li>
					<li> <a href="javascript:void(0);" onClick="self.top.location.href='logout.php'">安全注销</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'admin' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items3_1")'>管理员</div>
			<div class="left_box_nr" style='display:block' id='items3_1'>
				<ul>
					<li> <a id="1" href="admin.add.php" target='main'>添加管理员</a>
					</li>
					<li> <a id="a1" href="admin.inc.php" target='main'>查看管理员</a>
					</li>
					<li> <a id="a2" href="admin.edit.inc.php" target='main'>修改密码</a>
					</li>
					<li> <a id="a3" href="admin.login.php" target='main'>查看登录日志</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'user' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>用户信息管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="2" href="user.add.php" target='main'>新增用户</a>
					</li>
					<li> <a id="3" href="user.inc.php" target="main">用户信息管理</a>
					</li>
					<li> <a id="b2" href="hsuser.add.php" target="main">新增回收者信息</a>
					</li>
					<li> <a id="b3" href="hsuser.inc.php" target="main">回收者信息管理</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'inf' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>规则管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="5" href="mark.add.php" target='main'>新增规则信息</a>
					</li>
					<li> <a id="22" href="mark.inc.php" target="main">修改规则信息</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'address' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>地址信息管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="10" href="add.temp.add.php" target='main'>添加地址信息</a>
					</li>
					<li> <a id="11" href="add.temp.edit.php" target="main">地址信息修改</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'jyinf' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>交易信息管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="13" href="order.temp.add.php?id=1" target='main'>添加已交易信息</a>
					</li>
					<li> <a id="13" href="order.temp.add.php?id=2" target='main'>添加未派交易订单</a>
					</li>
					<li> <a id="13" href="order.temp.add.php?id=3" target='main'>添加正在进行的订单</a>
					</li>
					<li> <a id="14" href="order.temp.edit.php" target="main">修改交易信息</a>
					</li>
					<li> <a id="14" href="order.temp.edit.php" target="main">查看未支付订单</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'jfshop' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>积分商城管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="7" href="jfshop.add.php" target='main'>增加积分商城物品信息</a>
					</li>
					<li> <a id="8" href="jfshop.inc.php" target='main'>积分商城物品信息管理</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'class' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>首页分类管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="23" href="class.add.php" target='main'>增加分类</a>
					</li>
					<li> <a id="24" href="class.inc.php" target='main'>分类管理</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'waste' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>废品信息管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="16" href="waste.add.php" target='main'>废品价格管理</a>
					</li>
					<li> <a id="17" href="waste.inc.php" target='main'>废品信息修改</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		} elseif ( $_GET[ 'menu' ] == 'Wastebox' ) {
				?>
		<div class="left_box_kk">
			<div class="left_box_tit" onClick='showHide("items4_1")'>废品箱管理</div>
			<div class="left_box_nr" style='display:block' id='items4_1'>
				<ul>
					<li> <a id="19" href="case.add.php" target='main'>添加废品信息</a>
					</li>
					<li> <a id="20" href="case.temp.inc.php" target='main'>用户废品箱管理</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		}
		?>
	</div>

</body>
<script src="js/ajax_index.left.js"></script>

</html>