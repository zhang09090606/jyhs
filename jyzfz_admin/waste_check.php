<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
$url = "waste.add.php";
$tablename = "waste";
$surl = "waste.inc.php";
$upurl = "../upload/waste";
switch ( $action ) {
	case "add";

	$inf = $_POST[ 'inf' ];
	$price = $_POST[ 'price' ];
	if ( $price == 0 ) {
		$inf = $Db->check_str( $inf, "没有价格时提示信息不能为空", $url );
	}
	$file = new Uploads_File( $_FILES[ 'file' ], $upurl );
	$name = $_POST[ 'name' ];
	$class = $_POST[ 'parentid' ];
	$pic = $upurl . "/" . $file->new_file_name;
	$data = array(
		'class' => $class,
		'name' => $name,
		'price' => $price,
		'inf' => $inf,
		'pic' => $pic,
	);
	$Db->insertdata( $tablename, $data );
	msg_url( "添加废品成功", $surl );
	break;

	case "del";
	$id = $_GET[ 'id' ];
	$Db->deletedata( $tablename, "id=$id" );
	msg_url( "删除废品成功", $surl );
	break;

	case "edit";
	$id = $_POST[ 'gid' ];
	$price = $_POST[ 'price' ];
	$inf = $_POST[ 'inf' ];
	if ( $price == 0 ) {
		$Db->check_str( $inf, "没有价格时提示信息不能为空", "waste.edit.php?id=$id" );
	} else {

	}
	$pic = $_GET[ 'pic' ];
	unlink( $pic );
	$file = new Uploads_File( $_FILES[ 'file' ], $upurl );
	$name = $_POST[ 'name' ];
	$class = $_POST[ 'parentid' ];
	echo $class;
	$pic = $upurl . "/" . $file->new_file_name;
	$data = array(
		'name' => $name,
		'price' => $price,
		'inf' => $inf,
		'pic' => $pic,
		'class' => $class
	);
	$Db->updatedata( $tablename, $data, "id=$id" );
	msg_url( "修改菜品成功", $surl );
	break;


}


?>