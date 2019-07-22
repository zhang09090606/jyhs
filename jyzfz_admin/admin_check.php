<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
$add_url = "admin.add.php";
switch ( $action ) {
	case "add";
	$check = $_POST[ 'check' ];
	$grade = "$check[0]";
	for ( $i = 1; $i < count( $check ); $i++ ) {
		$grade = $grade . "," . $check[ $i ];
	}
	$username = $_POST[ 'username' ];
	$pwd = $_POST[ 'pwd' ];
	$data = [
		'username' => $username,
		'pwd' => $pwd,
		'grade' => $grade
	];
	$Db->insertdata( "admin", $data );
	msg_url( "添加成功", "admin.inc.php" );

	break;

	case "del";
	$id = $_GET[ 'id' ];
	$Db->deletedata( "admin", "id=$id" );
	msg_url( "删除成功", "admin.inc.php" );
	break;
	$check = $_POST[ 'check' ];
	$grade = "$check[0]";
	for ( $i = 1; $i < count( $check ); $i++ ) {
		$grade = $grade . "," . $check[ $i ];
	}
	$username = $_POST[ 'username' ];
	$pwd = $_POST[ 'pwd' ];
	$data = [
		'username' => $username,
		'pwd' => $pwd,
		'grade' => $grade
	];
	//print_r($data);die;
	$Db->updatedata( "admin", $data, "id=$id" );
	msg_url( "修改成功", "admin.inc.php" );
	break;
}