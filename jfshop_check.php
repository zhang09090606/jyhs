<?php
include( "includes/init.php" );
	$name=$_SESSION['name'];
	$arr=$Db->get_one('user',"name='$name'");
	$action=$_POST['action'];
	switch($action){
		case 'send';
			$id=$_POST['id'];
			$num=$_POST['num'];
			$add=$_POST['add'];
			$row=$Db->get_one("jfshop","id='$id'");
			$price=$num*$row['need'];
			$data=[
				'num'=>$num,
				'addid'=>$add,
				'name'=>$row['name'],
				'user'=>$name,
				'isfinish'=>'否',
				'user'=>$name,
				'price'=>$price,
				'pic'=>$row['pic']
			];
			$Db->insertdata("jfshop_order", $data);
			$num2=$row['num']-$num;
			$data=[
				'num'=>$num2,
			];
			$Db->updatedata( "jfshop", $data, "id='$id'" );
			$point=$arr['point']-$price;
			$data=[
				'point'=>$point,
			];
			$Db->updatedata( "user", $data, "name='$name'" );
			msg_url_ok("兑换成功","jfshop.php");
			break;
	}
?>