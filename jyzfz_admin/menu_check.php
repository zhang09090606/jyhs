<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
$url = "menu.add.php";
$tablename = "menu";
$surl = "menu.inc.php";
switch ( $action ) {
	case "add";
	$name = $Db->check_str( $_POST[ 'name' ], "菜品名称不能为空", $url );
	$price = $Db->check_str( $_POST[ 'price' ], "菜品单价不能为空", $url );
	$date = $Db->dates();
	$data = array(
		'name' => $name,
		'price' => $price,
		'postime' => $date
	);
	$Db->insertdata( $tablename, $data );
	msg_url( "添加菜品成功", $surl );
	break;

	case "del";
	$id = $_GET[ 'id' ];
	$Db->deletedata( $tablename, "id=$id" );
	msg_url( "删除菜品成功", $surl );
	break;

	case "edit";
	$id = $_POST[ 'gid' ];
	$name = $Db->check_str( $_POST[ 'name' ], "菜品名称不能为空", $url );
	$price = $Db->check_str( $_POST[ 'price' ], "菜品单价不能为空", $url );
	$data = array(
		'name' => $name,
		'price' => $price
	);
	$Db->updatedata( $tablename, $data, "id=$id" );
	msg_url( "修改菜品成功", $surl );
	break;


}


?>