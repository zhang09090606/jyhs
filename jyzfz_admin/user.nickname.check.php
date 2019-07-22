<?php
include( "../includes/init.php" );
$name = $_POST[ "param" ];
$arr = $Db->get_one( "user", "nickname='$name'" );

if ( $arr ) {
	echo "昵称已被使用过";
} else {
	$json = '{"status":"y"}';
	echo $json;
}


?>