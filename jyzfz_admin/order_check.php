<?php
include( '../includes/init.php' );
$action = $_REQUEST[ 'action' ];
switch ( $action ) {
	case "finish";
	$addid = $_POST[ 'addid' ];
	$name = $_POST[ 'username' ];
	$hsuser = $_POST[ 'hsuser' ];
	$stime = $_POST[ 'stime' ];
	$ftime = $_POST[ 'ftime' ];
	$jtime = $_POST[ 'jtime' ];
	$ytime = $_POST[ 'ytime' ];
	$con = $_POST[ 'con' ];
	$data = [
		'name' => $name,
		'hsuser' => $hsuser,
		'addid' => $addid,
		'stime' => $stime,
		'ftime' => $ftime,
		'jtime' => $jtime,
		'ytime' => $ytime,
		'isstart' => "是",
		'isfinish' => "是"
	];
	$Db->insertdata( "order", $data );
	$res = $Db->get_one( "order", "id = (select max(id) from lo_order)" );
	$id = $res[ 'id' ];
	$data = [
		'conid' => $id
	];
	$Db->updatedata( "order", $data, "id='$id'" );
	foreach ( $con as $v ) {
		$row = $Db->get_one( "case", "id='$v'" );
		$price = $row[ 'price' ];
		$num = $row[ 'num' ];
		$name = $row[ 'class' ];
		$data = [
			'id' => $id,
			'name' => $name,
			'price' => $price,
			'num' => $num,

		];
		$Db->insertdata( "ordercon", $data );
	}
	msg_url( "添加成功", "order.temp.edit.php" );
	break;
	case "run";
	$addid = $_POST[ 'addid' ];
	$name = $_POST[ 'username' ];
	$hsuser = $_POST[ 'hsuser' ];
	$stime = $_POST[ 'stime' ];
	$jtime = $_POST[ 'jtime' ];
	$ytime = $_POST[ 'ytime' ];
	$con = $_POST[ 'con' ];
	$data = [
		'name' => $name,
		'hsuser' => $hsuser,
		'addid' => $addid,
		'stime' => $stime,
		'jtime' => $jtime,
		'ytime' => $ytime,
		'isstart' => "是",
		'isfinish' => "否"
	];
	$Db->insertdata( "order", $data );
	$res = $Db->get_one( "order", "id = (select max(id) from lo_order)" );
	$id = $res[ 'id' ];
	$data = [
		'conid' => $id
	];
	$Db->updatedata( "order", $data, "id='$id'" );
	foreach ( $con as $v ) {
		$row = $Db->get_one( "case", "id='$v'" );
		$price = $row[ 'price' ];
		$num = $row[ 'num' ];
		$name = $row[ 'class' ];
		$data = [
			'id' => $id,
			'name' => $name,
			'price' => $price,
			'num' => $num,

		];
		$Db->insertdata( "ordercon", $data );
	}
	msg_url( "添加成功", "order.temp.edit.php" );
	break;
	case "wait";
	$addid = $_POST[ 'addid' ];
	$name = $_POST[ 'username' ];
	$stime = $_POST[ 'stime' ];
	$ytime = $_POST[ 'ytime' ];
	$con = $_POST[ 'con' ];
	$data = [
		'name' => $name,
		'addid' => $addid,
		'stime' => $stime,
		'ytime' => $ytime,
		'isstart' => "否",
		'isfinish' => "否",
	];
	$Db->insertdata( "order", $data );
	$res = $Db->get_one( "order", "id = (select max(id) from lo_order)" );
	$id = $res[ 'id' ];
	$data = [
		'conid' => $id
	];
	$Db->updatedata( "order", $data, "id='$id'" );
	foreach ( $con as $v ) {
		$row = $Db->get_one( "case", "id='$v'" );
		$price = $row[ 'price' ];
		$num = $row[ 'num' ];
		$name = $row[ 'class' ];
		$data = [
			'id' => $id,
			'name' => $name,
			'price' => $price,
			'num' => $num,
		];
		$Db->insertdata( "ordercon", $data );
	}
	msg_url( "添加成功", "order.temp.edit.php" );
	break;
	case "edit";
	$id = $_POST[ 'gid' ];
	$addid = $_POST[ 'addid' ];
	$name = $_POST[ 'username' ];
	$hsuser = $_POST[ 'hsuser' ];
	$stime = $_POST[ 'stime' ];
	$ftime = $_POST[ 'ftime' ];
	$jtime = $_POST[ 'jtime' ];
	$ytime = $_POST[ 'ytime' ];
	$con = $_POST[ 'con' ];
	if ( $jtime == "" && $ftime == "" ) {
		$isstart="否";
		$isfinish="否";
	} else if ( $stime!= "" && $ftime == "" ) {
		$isstart="是";
		$isfinish="否";
	} else {
		$isstart="是";
		$isfinish="是";
	}
	$data = [
		'name' => $name,
		'hsuser' => $hsuser,
		'addid' => $addid,
		'stime' => $stime,
		'ftime' => $ftime,
		'jtime' => $jtime,
		'ytime' => $ytime,
		'isstart' => $isstart,
		'isfinish' => $isfinish
	];
	
	$Db->updatedata( "add", $data, "id=$id" );
	foreach ( $con as $v ) {
		$row = $Db->get_one( "case", "id='$v'" );
		$price = $row[ 'price' ];
		$num = $row[ 'num' ];
		$name = $row[ 'class' ];
		$data = [
			'id' => $id,
			'name' => $name,
			'price' => $price,
			'num' => $num,

		];
		$Db->updatedata( "ordercon", $data, "id=$id" );
	}
	msg_url( "修改成功", "add.inc.php?username=" . $username );
	break;
	case "check";
	$id = $_GET[ 'id' ];
	if ( $id == 1 ) {
		$surl = "order.finish.add.php";
	} else if ( $id == 2 ) {
		$surl = "order.wait.add.php";
	} else {
		$surl = "order.run.add.php";
	}
	$tadd = "order.temp.add.php?id=" . $id;
	$name = $_POST[ 'name' ];
	$arr = $Db->get_one( "user", "name='$name'" );
	if ( $id != 2 ) {
		$hsuser = $_POST[ 'hsuser' ];
		$arr2 = $Db->get_one( "hsuser", "username='$hsuser'" );
		if ( $arr & $arr2 ) {
			msg_url( "查找成功", $surl . "?username=" . $name . "&hsuser=" . $hsuser );
		} else {
			msg_url_no( "用户或回收者不存在", $tadd );
		}
	} else {
		if ( $arr ) {

			msg_url( "查找成功", $surl . "?username=" . $name );
		} else {
			msg_url_no( "用户或回收者不存在", $tadd );
		}
	}
	$tadd = "order.temp.add.php";



	break;
	case "del";
	$id = $_GET[ 'id' ];
	$username = $_GET[ 'username' ];
	$Db->deletedata( "order", "id=$id" );
	msg_url( "删除成功", "order.inc.php?username=$username" );
	break;
	case "editcheck";
	$tadd = "order.temp.edit.php";
	$surl = "order.inc.php";
	$name = $_POST[ 'name' ];
	$hsuser = $_POST[ 'hsuser' ];
		if(!$name&&!$hsuser){
			msg_url_no( "用户和回收者不能全为空", $tadd );
			die;
		}
		if($hsuser){
			$arr = $Db->get_one( "hsuser", "username='$hsuser'");
			if ( !$arr  ) {
				msg_url_no( "回收者不存在", $tadd );
			}
		}
		if($name){
			$arr = $Db->get_one( "user", "name='$name'");
			if ( !$arr  ) {
				msg_url_no( "用户不存在", $tadd );
			}
		}
		if(!$hsuser){
			$hsuser="";
		}else{
			$hsuser="='$hsuser'";
		}
		if(!$name){
			$name="like '%'";
		}else{
			$name="='$name'";
		}
		msg_url( "查找成功", $surl . "?username=" . $name."&hsuser=".$hsuser );
	break;
	case "del_all";
	$username = $_GET[ 'username' ];
	$ids = implode( ",", $_POST[ 'id' ] );
	$sql = $Db->deletedata( "order", "id in($ids)" );
	msg_url( "删除成功", "order.inc.php?username=" . $username );

	break;


}