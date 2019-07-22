<?php
include( "../includes/init.php" );

$action = $_REQUEST[ 'action' ];

$url = "mark.add.php";
$surl = "mark.inc.php";
switch ( $action ) {
	case "add";
	$cname = $Db->check_str( $_POST[ 'name' ], "栏目名称不能为空", $url );
	$title = $Db->check_str( $_POST[ 'title' ], "标题不能为空", $url );
	$reg = '/^[\w\W]{1,10}$/';
	if ( !preg_match( $reg, $cname ) ) {
		$Db->back_info( "栏目名称为1-10位任意字符", $url );
	}
	$reg = '/^[\w\W]{1,20}$/';
	if ( !preg_match( $reg, $title ) ) {
		$Db->back_info( "标题为1-20位任意字符", $url );
	}
	$content = $_POST[ 'content' ];
	$postime = $Db->dates();
	$datas = array(
		'cname' => $cname,
		'title' => $title,
		'content' => $content,
		'postime' => $postime
	);

	$Db->insertdata( "marks", $datas );
	msg_url( "添加成功", "mark.inc.php" );
	break;

	case "del";
	$id = $_GET[ 'id' ];
	$Db->deletedata( "marks", "id=$id" );
	msg_url( "删除成功", "mark.inc.php" );
	break;

	case "edit";
	$id = $_POST[ 'gid' ];
	$cname = $Db->check_str( $_POST[ 'name' ], "栏目名称不能为空", $url );
	$title = $Db->check_str( $_POST[ 'title' ], "标题不能为空", $url );
	$reg = '/^[\w\W]{1,10}$/';
	if ( !preg_match( $reg, $cname ) ) {
		$Db->back_info( "栏目名称为1-10位任意字符", $url );
	}
	$reg = '/^[\w\W]{1,20}$/';
	if ( !preg_match( $reg, $title ) ) {
		$Db->back_info( "标题为1-20位任意字符", $url );
	}
	$content = $_POST[ 'content' ];
	$postime = $Db->dates();
	$datas = array(
		'cname' => $cname,
		'title' => $title,
		'content' => $content,
		'postime' => $postime
	);

	$Db->updatedata( "marks", $datas, "id=$id" );
	msg_url( "修改成功", "mark.inc.php" );
	break;
	case "del_all";
	$ids = implode( ",", $_POST[ 'id' ] );
	$sql = $Db->deletedata( "marks", "id in($ids)" );
	msg_url( "删除成功", "mark.inc.php" );

	break;

}