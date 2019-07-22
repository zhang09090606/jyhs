<?php
include( "../includes/init.php" );
$name = $_POST[ "param" ];
$arr = $Db->get_one( "user", "name='$name'" );

if ( $arr ) {
	echo "该手机号已被注册过";
} else {
	$json = '{"status":"y"}';
	echo $json;
}


?>