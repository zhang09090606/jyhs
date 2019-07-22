<?php
include( "../includes/init.php" );

//print_r($_SESSION);die;
unset( $_SESSION );
session_destroy(); //清空所有session
msg_url_ok( "注销成功", "login.html" );