<?php
include( '../includes/init.php' );
$upurl = "../upload/class";
$action = $_REQUEST[ 'action' ];
$url = "class.add.php";


switch ( $action ) {
	case "add";
	$username = $_POST[ 'username' ];
	$name = $_POST[ 'name' ];
	$inf = $_POST[ 'inf' ];
	$lng = $_POST[ 'lng' ];
	$lat = $_POST[ 'lat' ];
	$tel = $_POST[ 'tel' ];
	$peo = $_POST['peo'];
	$data = [
		'name' => $username,
		'addname' => $name,
		'inf' => $inf,
		'lng' => $lng,
		'lat' => $lat,
		'tel' => $tel,
		'peo' => $peo
	];
	$Db->insertdata( "add", $data );
	msg_url( "添加成功", "add.inc.php?username=" . $username );
	break;
	case "edit";
	$id = $_POST[ 'gid' ];
	$username = $_POST[ 'username' ];
	$name = $_POST[ 'name' ];
	$inf = $_POST[ 'inf' ];
	$lng = $_POST[ 'lng' ];
	$lat = $_POST[ 'lat' ];
	$tel = $_POST[ 'tel' ];
	$peo = $_POST['peo'];
	$data = [
		'name' => $username,
		'addname' => $name,
		'inf' => $inf,
		'lng' => $lng,
		'lat' => $lat,
		'tel' => $tel,
		'peo' => $peo
	];
	$Db->updatedata( "add", $data, "id=$id" );
	msg_url( "修改成功", "add.inc.php?username=" . $username );
	break;
	case "check";
	$name = $_POST[ 'name' ];
	$tadd = "add.temp.add.php";
	$surl = "add.add.php";
	$arr = $Db->get_one( "user", "name='$name'" );
	$id = $arr[ 'id' ];
	if ( $arr ) {
		msg_url( "查找成功", $surl . "?username=" . $name );
	} else {
		msg_url_no( "用户不存在", $tadd );
	}
	break;
	case "del";
	$id = $_GET[ 'id' ];
	$username = $_GET[ 'username' ];
	$Db->deletedata( "add", "id=$id" );
	msg_url( "删除成功", "add.inc.php?username=$username" );
	break;
	case "editcheck";
	$name = $_POST[ 'name' ];

	$tadd = "add.temp.edit.php";
	$surl = "add.inc.php";
	$arr = $Db->get_one( "user", "name='$name'" );
		
	$id = $arr[ 'id' ];
	if ( $arr) {
		msg_url( "查找成功", $surl . "?username=" . $name);
	} else {
		msg_url_no( "用户不存在", $tadd );
	}
	break;
	case "del_all";
	$username = $_GET[ 'username' ];
	$ids = implode( ",", $_POST[ 'id' ] );
	$sql = $Db->deletedata( "add", "id in($ids)" );
	msg_url( "删除成功", "add.inc.php?username=" . $username );

	break;


}