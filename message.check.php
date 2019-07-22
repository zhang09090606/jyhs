<meta charset="utf-8">
<?php
	$con=$_POST['con'];
	$time=date();
	$name=$_SESSION['name'];
	$data=[
		'name'=>$name,
		'time'=>$time,
		'con'=>$con,
		'issee'=>'否'
	];
?>