<?php
include("init.php");

if(empty($_SESSION['username'])){
    $Db->back_info("非法登录","login.html");
}
class ch{
	function check($n){
		if (in_array(1, $_SESSION['permission'])){
			return true;
		}else{
			return false;
		}
	}
}