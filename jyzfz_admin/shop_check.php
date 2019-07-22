<?php
include("../includes/init.php");
$action = $_REQUEST['action'];
$url = "shop.add.php";
$surl = "shop.inc.php";
$tablename = "shop";
switch($action)
{
    case"ajax";
        $mid = $_POST['mid'];
        $row = $Db->get_one("menu","id=".$mid);
        $price = $row['price'];
        echo $price;
        break;

    case"add";
        $mid = $Db->check_str($_POST['m_id'],"请选择一个菜品名称",$url);
        $arr = $Db->get_one("menu","id=".$mid);
        $mname = $arr['name'];
        $price = $_POST['price'];
        $buy_people = $Db->check_str($_POST['buy_people'],"请填写购买人",$url);
        $num = $Db->check_str($_POST['num'],"请填写购买数量",$url);
        $zprice = $num*$price;
        $date = $Db->dates();
        $data = array(
            'm_id'=>$mid,
            'm_name'=>$mname,
            'num'=>$num,
            'price'=>$price,
            'zprice'=>$zprice,
            'buy_people'=>$buy_people,
            'postime'=>$date
        );

        $Db->insertdata($tablename,$data);
        msg_url("添加商品成功",$surl);
        break;

    case"del";

        break;

    case"edit";

        break;

}
?>