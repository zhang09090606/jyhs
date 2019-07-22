<?php
include( "../includes/init.php" );
$name = $_POST[ "param" ];
$arr = $Db->get_one( "admin", "username='$name'" );

if ( $arr ) {
	echo "该管理员账号已被注册";
} else {
	$json = '{"status":"y"}';
	echo $json;
}


?>