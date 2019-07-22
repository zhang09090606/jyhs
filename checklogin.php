<?php
include("includes/init.php");
$url = "login.php";

        //第四步 进行各种不为空
            $username = $Db->check_str($_POST['name'],"用户名不能为空",$url);
            $pwd = $Db->check_str($_POST['pwd'],"密码不能为空",$url);
            $row = $Db->get_one("user","name='$username'");
        //第六步 根据查询出来的结果进行与表单提交来的值进行比较
	
            if($row){
                if($row['pwd'] == $pwd ){
                    $_SESSION['name'] = $row['name'];   
					
                    msg_url_ok("登录成功","my.php");
                }else{
                    $Db->back_info("密码不正确",$url);
                }
            }else{
                $Db->back_info("账号不正确",$url);
            }

?>