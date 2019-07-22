<?php
	include("includes/init.php");
	include("order_success.php");
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
	$name=$_SESSION['name'];
	$id=$_GET['gid'];
	$num=$_POST['num'];
	if($id==0){
		$class=$_POST['name'];
		$price=0;
	}else{
		$make=$_POST['make'];
		$row=$Db->get_one("waste","id='$make'");
		$class=$row['name'];
		$price=$row['price']*$num;
	}

	
	$data = array(
		'price'=>$price,
		'class'=>$class,
		'num'=>$num,
		'name'=>$name
	);
	$Db->insertdata("case",$data);
	msg_success("加入废品车成功","case.php","index.html");

?>