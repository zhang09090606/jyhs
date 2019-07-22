<?php
//第一步需要引入连接数据库文件includes/init.php
include( "../includes/init.php" );
//第二步获取表单提交来的隐藏域 $action
$action = $_REQUEST[ 'action' ];
//第三步根据获取来的隐藏域的值进行判断switch，提交来的值是否是login
$url = "login.html";
switch ( $action ) {
	case "login";
	//第四步 进行各种不为空
	$code = $Db->check_str( $_POST[ 'code' ], "验证码不能为空", $url );

	if ( strtolower( $code ) != strtolower( $_SESSION[ 'ygy' ] ) ) {
		$Db->back_info( "验证码不正确", "login.html" );
	}
	$username = $Db->check_str( $_POST[ 'username' ], "用户名不能为空", $url );
	$pwd = $Db->check_str( $_POST[ 'pwd' ], "密码不能为空", $url );
	//第五步 进行查询该账号是否存在(只查询账号里面的所有数据)
	$row = $Db->get_one( "admin", "username='$username'" );
	//第六步 根据查询出来的结果进行与表单提交来的值进行比较
	if ( $row ) {
		if ( $row[ 'pwd' ] == $pwd ) {
			//第七步 如果登录成功就跳转到后台框架页面Index.php[进行session赋值账号]
			$_SESSION[ 'username' ] = $row[ 'username' ];
			$_SESSION[ 'grade' ] = explode( ',', $row[ 'grade' ] );
			$ip = $_SERVER[ 'REMOTE_ADDR' ];
			$u = $row[ 'username' ];
			$t = time();
			$sql = "insert into lo_userlog(u_name,u_ip,u_time)values('$u','$ip','$t')";
			$Db->query( $sql );
			msg_url_ok( "登录成功", "index.php" );
		} else {
			$Db->back_info( "密码不正确", $url );
		}
	} else {
		$Db->back_info( "账号不正确", $url );
	}
	break;
}
?>