<?php
/**
 * @param $totalPage  总的记录条数
 * @param $num        显示几条
 * @param $url        请求地址
 */
function Page($totalPage,$num,$url)
{
    global $page_all_num,$page,$ps,$px,$limit_first,$pagenav;
    $page = !empty($_GET['page'])?$_GET['page']:1;//当前页数
    $page = (int)$page;
    $page_all_num = ceil($totalPage/$num);//求有几个页面完成显示
    $limit_first = ($page-1)*$num;//求起始数据
    $limit_first.=",".$num;
    $ps = $page <= 1 ? 1 : $page-1;//上一页
    $px = $page >= $page_all_num ? $page_all_num : $page+1;//下一页
    $pagenav = '总记录：'.$page_all_num."页/".$page."条 | ";
    $pagenav .= '<a href="'.$url.'">首页</a> | ';//首页
    $pagenav.='<a href="'.$url.'?page='.$ps.'">上一页</a> | ';
    $pagenav.='<a href="'.$url.'?page='.$px.'">下一页</a> | ';
    $pagenav.='<a href="'.$url.'?page='.$page_all_num.'">尾页</a>';
//    echo $limit_first."<br>";
//    echo $pagenav;
}

//$sql = "select * from lx_admin ";
//$res = $Db->query($sql);
//$count = $Db->rows($res);
//Page($count,2,"admin.inc.php");
//$arr = $Db->get_all("admin","","*","id desc",$limit_first);

//$pagenav  用于使用的时候输出
?>