<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$action = $_POST[ 'action' ];
	
	switch ( $action ) {
		case "delete";
			$id = $_POST[ 'id' ];
			$Db->deletedata("ordercon","id='$id'");
			$Db->deletedata("order","id='$id'");
		break;
		case "sum";
		$id=$_POST['id'];
		if($id==0){
			$class=$_POST['class'];

			$waste=$Db->get_all("waste","class=$class");
			echo json_encode($waste);
		}
		break;
		case "delete0";
			$id = $_POST[ 'id' ];
			$Db->deletedata("ordercon","id='$id'");
			$Db->deletedata("order","id='$id'");
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