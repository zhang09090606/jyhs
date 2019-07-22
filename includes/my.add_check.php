<?php
include("includes/init.php");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$action=$_POST['action'];
switch($action){
	case "add";
		$peo =$_POST[ 'peo' ];
		$tel = $_POST[ 'tel' ];
		$add=$_POST['add'];
		$lng=$_POST['lng'];
		$lat=$_POST['lat'];
		$adds=$_POST['adds'];
		$name=$_SESSION['name'];
		$data = array(
			'name' => $name,
			'peo'=>$peo,
			'tel' => $tel,
			'lng' => $lng,
			'lat' => $lat,
			'addname'=>$add,
			'inf'=>$adds
		);
		$Db->insertdata( "add", $data );
		msg_url( "添加成功", "my.add.php" );
	break;
	case "edit";
		$peo =$_POST[ 'peo' ];
		$tel = $_POST[ 'tel' ];
		$add=$_POST['add'];
		$lng=$_POST['lng'];
		$lat=$_POST['lat'];
		$adds=$_POST['adds'];
		$name=$_SESSION['name'];
		$id=$_POST['id'];
		$data = array(
			'name' => $name,
			'peo'=>$peo,
			'tel' => $tel,
			'lng' => $lng,
			'lat' => $lat,
			'addname'=>$add,
			'inf'=>$adds
		);
		$Db->updatedata( "add", $data,"id='$id'");
		msg_url( "修改成功", "my.add.php" );
	break;
	case "delete";
		$id=$_POST['id'];
		$Db->deletedata("add","id='$id'");
		echo 0;
	break;
}