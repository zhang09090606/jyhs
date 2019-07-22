<?php
include( "includes/init.php" );

$action=$_POST['action'];

switch($action){
	case 'ajax';
		$id=$_POST['id'];
		$row=$Db->get_one("hsuser","id='$id'");
		if($row['run']!=''){
			echo $row['run'];
		}else{
			echo 'false';
		}
		break;
	case 'agree';
		$id=$_POST['id'];
		$name=$_SESSION['hsname'];
		$data =[
			'isstart' => '是',
			'hsuser'=>$name,
			'jtime'=>date('y-m-d h:i:s',time()),
		];
		$Db->updatedata( "order", $data, "id='$id'" );
		$data = [
			'isfree' => '否',
			'run'=>$id
		];
		$Db->updatedata( "hsuser", $data, "username='$name'" );
		echo $id;
		break;
	case 'ajax2';
		
		$id=$_POST['id'];
		$row=$Db->get_one("hsuser","id='$id'");
		$lng=$row['lng'];
		$lat=$row['lat'];
		$lat0=$lat+0.018;
		$lat1=$lat-0.018;
		$rows=$Db->get_all("order","ytime!='' and isstart!='是' and addlat between $lat1 and $lat0 and addlng between $lng-(0.36-(addlat-$lat)*(addlat-$lat)) and $lng+(0.36-(addlat-$lat)*(addlat-$lat))");
		if($rows){
			//$row = array_rand($rows,1);	
			echo json_encode($rows);
		}else{
			echo 'false';
		}
		break;
	case 'lastprice';
		$id=$_POST['id'];
		
		$sum=$_POST['sum'];
			$data = [
				'lastprice' => $sum,
			];	
		$Db->updatedata( "order", $data, "id='$id'" );
		echo 1;
		break;
	case 'finish';
		$id=$_POST['id'];
		$row=$Db->get_one("order","id='$id'");	
		if($row['isfinish']=='是'){
			echo 1;
		}else{
			echo 0;
		}
		
		break;
	case 'free';
		$name=$_SESSION['hsname'];
			$data = [
				'isfree' =>'是',
			];	
		$Db->updatedata("hsuser", $data, "username='$name'"	 );
		echo 1;
		break;
	case 'buzy';
		$name=$_SESSION['hsname'];
		$data = [
			'isfree' =>'否',
		];	
		$Db->updatedata("hsuser", $data, "username='$name'"	 );
			echo 1;
		break;
}
?>