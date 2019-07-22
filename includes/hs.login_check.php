<?php
include("includes/init.php");
$url = "hs.login.php";
            $username = $Db->check_str($_POST['name'],"用户名不能为空",$url);
            $pwd = $Db->check_str($_POST['pwd'],"密码不能为空",$url);
            $row = $Db->get_one("hsuser","username='$username'");
            if($row){
                if($row['pwd'] == $pwd ){
                    $_SESSION['hsname'] = $row['username'];   
					
                    msg_url_ok("登录成功","hs.my.php");
                }else{
                    $Db->back_info("密码不正确",$url);
                }
            }else{
                $Db->back_info("账号不正确",$url);
            }

?>