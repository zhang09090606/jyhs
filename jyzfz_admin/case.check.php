<?php
include( "../includes/init.php" );
$name = $_POST[ "param" ];
$arr = $Db->get_one( "user", "name='$name'" );

if ( $arr ) {
	$json = '{"status":"y"}';
	echo $json;
} else {
	echo "用户不存在";
}


?>