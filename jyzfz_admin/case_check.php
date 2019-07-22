<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
$url = "case.add.php";
$tablename = "case";
$surl = "case.inc.php";
$temp = "case.temp.inc.php";
switch ( $action ) {
	case "add";
	$name = $_POST[ 'name' ];
	$temp=$Db->get_one("user","name='$name'");
	$id=$temp['id'];	
	$class = $_POST[ 'parentid' ];
	$num = $_POST[ 'num' ];
	$arr=$Db->get_one("waste","name='$class'");
	$price=$num*$arr['price'];
	$data = array(
		'class' => $class,
		'name' => $name,
		'num' => $num,
		'price'=>$price
	);
	$Db->insertdata( $tablename, $data );
	msg_url( "添加废品成功", $surl."?id=".$id);
	break;
	case "del";
	$id = $_GET[ 'id' ];
	$gid = $_GET[ 'gid' ];
	$Db->deletedata( $tablename, "id=$id" );
	msg_url( "删除废品成功", $surl . '?id=' . $gid );
	break;

	case "edit";
	$id = $_POST[ 'id' ];
	$gid = $_POST[ 'gid' ];
	$name = $_POST[ 'name' ];
	$class = $_POST[ 'parentid' ];
	$num = $_POST[ 'num' ];
	$arr=$Db->get_one("waste","name='$class'");
	$price=$num*$arr['price'];
	$data = array(
		'name' => $name,
		'class' => $class,
		'num' => $num,
		'price'=>$price
	);
	$Db->updatedata( $tablename, $data, "id=$gid" );
	msg_url( "修改成功", $surl . '?id=' . $id );
	break;
	case "check";
	$name = $_POST[ 'name' ];
	$arr = $Db->get_one( "user", "name='$name'" );
	$id = $arr[ 'id' ];
	if ( $arr ) {
		msg_url( "查找成功", $surl . "?id=" . $id );
	} else {
		msg_url_no( "用户不存在", $temp );
	}
	break;
}


?>