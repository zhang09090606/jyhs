<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
$url = "jfshop.add.php";
$tablename = "jfshop";
$surl = "jfshop.inc.php";
$upurl = "upload/jfshop";

switch ( $action ) {
	case "add";
	$file = new Uploads_File( $_FILES[ 'file' ], "../".$upurl );
	$name = $_POST[ 'name' ];
	$need = $_POST[ 'need' ];
	$num = $_POST[ 'num' ];
	$newname=$file->new_file_name;
	$pic = $upurl . "/" . $newname;
	$date = $Db->dates();


	$data = array(
		'name' => $name,
		'need' => $need,
		'postime' => $date,
		'num' => $num,
		'pic' => $pic,

	);
	$Db->insertdata( $tablename, $data );
	msg_url( "添加物品成功", $surl );
	break;

	case "del";
	$id = $_GET[ 'id' ];
	$Db->deletedata( $tablename, "id=$id" );
	msg_url( "删除物品成功", $surl );
	break;

	case "edit";
	$id = $_POST[ 'gid' ];
	$name = $Db->check_str( $_POST[ 'name' ], "物品名称不能为空", $url );
	$need = $Db->check_str( $_POST[ 'need' ], "所需绿化值不能为空", $url );
	$num = $Db->check_str( $_POST[ 'num' ], "剩余数量不能为空", $url );
	$pic = $Db->check_str( $_FILES[ 'file' ][ 'tmp_name' ], "请选择上传的图片", $url );
	$date = $Db->dates();
	if ( !preg_match( '/^.{0,50}$/i', $_POST[ 'name' ] ) ) {
		$Db->back_info( "物品名字最长不超过50字符,汉字占三字符", $url );
	}
	if ( !preg_match( '/^\d{0,10}$/i', $_POST[ 'need' ] ) ) {
		$Db->back_info( "所需绿化值只能为数字且位数小于十位", $url );
	}
	if ( !preg_match( '/^\d{0,10}$/i', $_POST[ 'num' ] ) ) {
		$Db->back_info( "剩余数量只能为数字且位数小于十位", $url );
	}
	if ( ( ( $_FILES[ "file" ][ "type" ] == "image/gif" ) ||
			( $_FILES[ "file" ][ "type" ] == "image/jpeg" ) ||
			( $_FILES[ "file" ][ "type" ] == "image/jpg" ) ||
			( $_FILES[ "file" ][ "type" ] == "image/png" ) ||
			( $_FILES[ "file" ][ "type" ] == "image/pjpeg" ) ) &&
		( $_FILES[ "file" ][ "size" ] < 1024000 ) ) {} else {
		$Db->back_info( "图片不符合格式要求", $url );
	}

	$data = array(
		'name' => $name,
		'need' => $need,
		'postime' => $date,
		'num' => $num,
		'pic' => $pic,

	);
	$Db->updatedata( $tablename, $data, "id=$id" );
	msg_url( "修改菜品成功", $surl );
	break;


}


?>