<?php
include( "../includes/init.php" );
$name = $_POST[ "param" ];
$arr = $Db->get_one( "hsuser", "idcard='$name'" );

if ( $arr ) {
	echo "该身份证号已被注册过";
} else {
	$json = '{"status":"y"}';
	echo $json;
}


?>