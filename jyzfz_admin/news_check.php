<?php
include("../includes/init.php");

$action = $_REQUEST['action'];

$url = "news.add.php";
$surl = "news.inc.php";
switch($action)
{
    case"add";
        $title = $Db->check_str($_POST['title'],"标题不能为空",$url);
        $author = $Db->check_str($_POST['author'],"作者不能为空",$url);
        $picurl = $_POST['picurl'];
        $content = $_POST['content'];
        $postime = $Db->dates();
		
        $types = !empty($_POST['types'])?$_POST['types']:"";
        if($types == 'a'){
            $cid = $Db->check_str($_POST['cid'],"请选择一个栏目名称",$url);
            $row = $Db->get_one("class","id=$cid","classname");
            $cname = $row[0];
			echo($cname);
            $datas = array(
                'cid'=>$cid,
                'cname'=>$cname,
                'title'=>$title,
                'author'=>$author,
                'picurl'=>$picurl,
                'content'=>$content,
                'postime'=>$postime
            );
			
            $Db->insertdata("news",$datas);
        }else{
            $parentid =  !empty($_POST['parentid'])?$_POST['parentid']:"";//获取要添加新闻的栏目ID（数组）
            //利用foreach循环把每个栏目ID提取出来，批次添加数据
            foreach($parentid as $v){
                //单独提取对应栏目ID的栏目名称
               // echo $v."<br>";//提取出单个栏目ID
                $row = $Db->get_one("class","id=".$v,"classname");
                $cname = $row['classname'];
               // echo $cname."<br>";//单个栏目名称
                $datas = array(
                    'cid'=>$v,
                    'cname'=>$cname,
                    'title'=>$title,
                    'author'=>$author,
                    'picurl'=>$picurl,
                    'content'=>$content,
                    'postime'=>$postime
                );
                $Db->insertdata("news",$datas);
            }
        }
        msg_url("添加成功","news.inc.php");
        break;

    case"del";
         $id = $_GET['id'];
         $Db->deletedata("news","id=$id");
        msg_url("删除成功","news.inc.php");
        break;

    case"edit";
        $id = $_POST['gid'];
        $cid = $Db->check_str($_POST['cid'],"请选择一个栏目名称",$url);
        $row = $Db->get_one("class","id=$cid","classname");
        $cname = $row[0];
        $title = $Db->check_str($_POST['title'],"标题不能为空",$url);
        $author = $Db->check_str($_POST['author'],"作者不能为空",$url);
        $picurl = $_POST['picurl'];
        $content = $_POST['content'];
        $datas = array(
            'cid'=>$cid,
            'cname'=>$cname,
            'title'=>$title,
            'author'=>$author,
            'picurl'=>$picurl,
            'content'=>$content
        );
       $Db->updatedata("news",$datas,"id=$id");
        msg_url("修改成功","news.inc.php");
        break;
	case"del_all";		
		$ids = implode(",",$_POST['id']);		
		$sql = $Db->deletedata("news","id in($ids)");
		msg_url("删除成功","news.inc.php");
		
	break;

}