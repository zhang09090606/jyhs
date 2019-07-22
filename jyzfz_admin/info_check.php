<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
$url = "info.add.php";
switch ( $action ) {
	case "add";

	$cid = $_POST[ 'cid' ];
	$classname = $_POST[ 'classname' ];
	$picurl = $_POST[ 'picurl' ];
	$description = $_POST[ 'description' ];
	$content = $_POST[ 'content' ];
	$postime = $Db->dates();
	$datas = array(
		'cid' => $cid,
		'cname' => $classname,
		'picurl' => $picurl,
		'description' => $description,
		'content' => $content,
		'postime' => $postime
	);
	$Db->insertdata( "info", $datas );
	msg_url( "添加成功", "info.inc.php" );
	break;
	case "edit";
	$id = $_POST[ 'gid' ];
	$description = $_POST[ 'description' ];
	$content = $_POST[ 'content' ];
	$picurl = $_POST[ 'picurl' ];
	$datas = array(
		'picurl' => $picurl,
		'description' => $description,
		'content' => $content
	);
	$Db->updatedata( "info", $datas, "id=$id" );
	msg_url( "修改成功", "info.inc.php" );
	break;
}