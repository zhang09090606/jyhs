<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$action = $_POST[ 'action' ];
	
	switch ( $action ) {
		case "delete";
			$id = $_POST[ 'id' ];
			$data = [
				'hsshow'=>'否',
			];
			$Db->updatedata("order", $data,"id='$id'" );
			echo 0;
		break;
		case "finish";
			$id=$_POST['id'];
			$arr=$Db->get_one("order","id='$id'");
			$hsuser=$arr['hsuser'];
			$data = [
				'run'=>'',
			];
			$Db->updatedata("hsuser", $data,"username='$hsuser'" );
			$ftime=date("Y-m-d h:i:s");
			$data = [
				'ftime' => $ftime,
				'isfinish'=>'是',
			];
			$Db->updatedata("order", $data, "id='$id'" );
			unset($_SESSION['con']);
			echo 1;
			
	}

?>