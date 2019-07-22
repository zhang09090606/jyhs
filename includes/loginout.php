<?php
	include( "includes/init.php" );
	$action=$_POST['action'];
	switch($action){
		case 'user';
			unset($_SESSION['name']);
			echo 1;
			break;
		case 'hsuser';
			unset($_SESSION['hsname']);
			echo 1;
			break;
	}
	
?>