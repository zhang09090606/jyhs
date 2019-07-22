<?php
include( "../includes/init.php" );
$action = $_REQUEST[ 'action' ];
switch ( $action ) {
	case "add";
		$username = $_POST[ 'username' ];
		$pwd = $_POST[ 'pwd' ];
		$name = $_POST[ 'name' ];
		$idcard = $_POST[ 'idcard' ];
		$star = $_POST[ 'star' ];
		$tel = $_POST[ 'tel' ];
		$isfree = $_POST[ 'isfree' ];
		$addname=$_POST['addname'];
		$lng=$_POST['lng'];
		$lat=$_POST['lat'];
		$data = array(
			'username' => $username,
			'name' => $name,
			'pwd' => $pwd,
			'idcard' => $idcard,
			'star' => $star,
			'tel' => $tel,
			'isfree' => $isfree,
			'lng'=>$lng,
			'lat'=>$lat,
			'addname'=>$addname,
		);

		$Db->insertdata( "hsuser", $data );
		msg_url( "添加成功", "hsuser.inc.php" );
	break;

	case "del";
		$id = $_GET[ 'id' ];
		$username = $_GET[ 'username' ];
		$Db->deletedata( "hsuser", "id=$id" );
		msg_url( "删除成功", "hsuser.inc.php" );
	break;
	case "edit";
		$id = $_POST[ 'gid' ];
		$username = $_POST[ 'username' ];
		$pwd = $_POST[ 'pwd' ];
		$name = $_POST[ 'name' ];
		$idcard = $_POST[ 'idcard' ];
		$arr = $Db->get_one( "hsuser", "idcard='$idcard'" );
		if ( $arr && $username != $arr[ 'username' ] ) {
			msg_url_no( "该身份证已被注册过请重新修改", "hsuser.edit.php?id=" . $id );
			die;
		}
		$star = $_POST[ 'star' ];
		$tel = $_POST[ 'tel' ];
		$isfree = $_POST[ 'isfree' ];
		$addname=$_POST['addname'];
		$lng=$_POST['lng'];
		$lat=$_POST['lat'];
		$data = array(
			'username' => $username,
			'name' => $name,
			'pwd' => $pwd,
			'idcard' => $idcard,
			'star' => $star,
			'tel' => $tel,
			'isfree' => $isfree,
			'lng'=>$lng,
			'lat'=>$lat,
			'addname'=>$addname,
		);
		//print_r($data);die;
		$Db->updatedata( "hsuser", $data, "id=$id" );
		msg_url( "修改成功", "hsuser.inc.php" );
	break;
}