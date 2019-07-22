<?php
include("includes/init.php");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
$action=$_POST['action'];

switch ( $action ) {
	case "delete";
		$id=$_POST['id'];
		$Db->deletedata("ordercon","id='$id'");
		$Db->deletedata("order","id='$id'");
		unset($_SESSION['con']);
		echo 0;
        break;
	case "ajax";
      	$id=$_POST['id'];
		$row=$Db->get_one("order","id='$id'");
		$addid=$_POST['addid'];
		$add=$Db->get_one("add","id='$addid'");
		$lng=$add['lng'];
		$lat=$add['lat'];
		$lat0=$lat+0.018;
		$lat1=$lat-0.018;
		$rows=$Db->get_all("hsuser","isfree='是' and lat between $lat1 and $lat0 and lng between $lng-(0.36-(lat-$lat)*(lat-$lat)) and $lng+(0.36-(lat-$lat)*(lat-$lat))");
		if($rows){
		
			$row = array_rand($rows,1);
			$data = [
				'isstart' => '是',
				'hsuser'=>$rows[$row]['username'],
				'jtime'=>date('y-m-d h:i:s',time()),
			];	
			$Db->updatedata( "order", $data, "id='$id'" );
			$data = [
				'isfree' => '否',
				'run'=>$id
			];	
			$hid=$rows[$row]['id'];
			$Db->updatedata( "hsuser", $data, "id='$hid'" );
			$con=$_SESSION['con'];
			foreach($con as $v){
				$Db->deletedata("case","id='$v'");
			}
			unset($_SESSION['con']);
			echo $hid;
		}else{
			echo 0;
		}
		break;
	case "ajax2";
		$id=$_POST['id'];
		$row=$Db->get_one("order","id='$id'");
		if($row['hsuser']!=''){
			echo 1;
		}else{
			echo 0;
		}
			
        break;
    case "s";
        $sum=$_POST['sum'];
        $id=$_POST['id'];
		$row=$Db->get_one("case","id='$id'");
		$price=$row['price'];
		$state=$_POST['state'];
		if( $state=="true"){
			echo $sum+$price;
		}else{
			echo $sum-$price;
		}
        break;
	 case "send";
		$add =$_POST['add'];
		$con= unserialize(base64_decode($_GET['rdo']));
		$_SESSION['con']=$con;
		$arr=$Db->get_one("add","id='$add'");
		$name=$_SESSION['name'];
		$ytime=$_POST['ytime'];
		if($ytime=="尽快送达"){
			$ytime="";
		}
		$data=[
			'addname'=>$arr['addname'],
			'addtel'=>$arr['tel'],
			'addinf'=>$arr['inf'],
			'addpeo'=>$arr['peo'],
			'addlng'=>$arr['lng'],
			'addlat'=>$arr['lat'],
			'name'=>$name,
			'stime' => date('y-m-d h:i:s',time()),
			'ytime' => $ytime,
			'isstart' => "否",
			'isfinish' => "否"
		];
		$Db->insertdata("order", $data);
			$res = $Db->get_one( "order", "id = (select max(id) from lo_order)" );
			$id = $res[ 'id' ];
			$_SESSION['conid']=$id;
			$data = [
				'conid' => $id
			];
			$Db->updatedata( "order", $data, "id='$id'" );
			foreach ( $con as $v ) {
				$row = $Db->get_one( "case", "id='$v'" );
				$price = $row[ 'price' ];
				$num = $row[ 'num' ];
				$name = $row[ 'class' ];
				$data = [
					'id' => $id,
					'name' => $name,
					'price' => $price,
					'num' => $num,
				];
		$Db->insertdata( "ordercon", $data );
		}
		echo "<script type='text/javascript'>
  window.location.href='case.send.wait.php?id=$id&addid=$add' </script>";
		//header("Location:case.send.wait.php?id=$id&addid=$add");  
		
		break;
	case "casedelete";
		$id=$_POST['id'];
		$Db->deletedata("case","id='$id'");
		echo 0;
        break;
	
	

}