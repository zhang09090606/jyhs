<?php
include( '../includes/init.php' );

$action = $_REQUEST[ 'action' ];
$url = "class.add.php";
switch ( $action ) {
	case "add";
	$parentid = $_POST[ 'parentid' ]; //获取父类的ID
	$classname = $Db->check_str( $_POST[ 'classname' ], "分类的名称必须填写", $url );
	$urls = $Db->check_str( $_POST[ 'urls' ], "链接地址必须填写", $url );
	$postime = $Db->dates();
	$infotype = $_POST[ 'infotype' ];
	//怎么知道添加的数据属于父类还是子类（如果parentid=0证明是父类）
	$row = $Db->get_one( "class", "id=$parentid", "*" );
	if ( $row ) {
		//利用获取来的父类的ID进行判断是否是一级分类  parentid = 0
		if ( $parentid == 0 ) {
			$parth = 0;
		} else {
			$parth = $row[ 'path' ] . '-' . $parentid; //那你的父亲的路径与你获取到的父类ID相连
		}

	} else {
		$parth = 0;
	}
	$datas = array(
		'parentid' => $parentid,
		'classname' => $classname,
		'path' => $parth,
		'urls' => $urls,
		'infotype' => $infotype,
		'postime' => $postime
	);
	//        echo "<pre>";
	//        print_r($datas);
	//        die;
	$Db->insertdata( "class", $datas );
	msg_url( "添加成功", "class.inc.php" );
	break;
	case "son";
	//如果添加子类失败，需要回传值id classname,path
	$id = $_POST[ 'id' ];
	$classnames = $_POST[ 'classnames' ];
	$urls = $Db->check_str( $_POST[ 'urls' ], "链接地址必须填写", $url );
	$path = $_POST[ 'path' ];
	//回传结束
	$parentid = $_POST[ 'parentid' ]; //获取父类的ID
	$classname = $Db->check_str( $_POST[ 'classname' ], "分类的名称必须填写", $url );
	$postime = $Db->dates();
	$infotype = $_POST[ 'infotype' ];
	//怎么知道添加的数据属于父类还是子类（如果parentid=0证明是父类）
	$row = $Db->get_one( "class", "id=$parentid", "*" );
	if ( $row ) {
		//利用获取来的父类的ID进行判断是否是一级分类  parentid = 0
		if ( $parentid == 0 ) {
			$parth = 0;
		} else {
			$parth = $row[ 'path' ] . '-' . $parentid; //那你的父亲的路径与你获取到的父类ID相连
		}

	} else {
		$parth = 0;
	}
	$datas = array(
		'parentid' => $parentid,
		'classname' => $classname,
		'path' => $parth,
		'urls' => $urls,
		'infotype' => $infotype,
		'postime' => $postime
	);
	$Db->insertdata( "class", $datas );
	msg_url( "添加子类成功", "class.inc.php" );
	break;
	case "edit";
	$id = $_POST[ 'gid' ];
	$classname = $_POST[ 'classname' ];
	$urls = $Db->check_str( $_POST[ 'urls' ], "链接地址必须填写", $url );
	$parentid = $_POST[ 'parentid' ];
	//怎么知道添加的数据属于父类还是子类（如果parentid=0证明是父类）
	$row = $Db->get_one( "class", "id=$parentid", "*" );
	if ( $row ) {
		//利用获取来的父类的ID进行判断是否是一级分类  parentid = 0
		if ( $parentid == 0 ) {
			$parth = 0;
		} else {
			$parth = $row[ 'path' ] . '-' . $parentid; //那你的父亲的路径与你获取到的父类ID相连
		}
	} else {
		$parth = 0;
	}
	$datas = array(
		'parentid' => $parentid,
		'classname' => $classname,
		'urls' => $urls,
		'path' => $parth
	);

	$Db->updatedata( "class", $datas, "id=$id" );
	msg_url( "修改成功", "class.inc.php" );
	break;
	case "del";
	$id = $_GET[ 'id' ];
	$parentid = $_GET[ 'parentid' ];
	//       $Db->getStree($id);
	//       $row = $Db->get_one("class","id=".$parentid);//查询出是否有父类
	//       if($row){
	//           $Db->back_info("该栏目禁止删除，存在父类","class.inc.php");
	//       }else{
	////            $sql = "select * from  lx_class where id=$id or path like  '%-$id' or  path like '%-$id-%' or parentid=$id ";
	//            //$sql = "delete from  lx_class where id=$id or path like  '%-$id' or  path like '%-$id-%' or parentid=$id ";
	//           //$Db->deletedata("class","id=$id or path like '%-$id' or  path like '%-$id-%' or parentid=$id","class.inc.php");
	//       }


	if ( $parentid == 0 ) {
		//	$sql = "select * from  lo_class where id=$id";
		echo '<script>confirm("该类有子类确定删除?")</script>';
		msg_url( "删除成功", "class.inc.php" );
		dd( $id, $Db );
	} else {
		$Db->deletedata( "class", "id=$id" );
		msg_url( "删除成功", "class.inc.php" );
	}
	//       $sql = "delete  from lx_class where id=$id or path like '%-$id' or path like '%-$id-%'";
	//       $res = $Db->query($sql);
	//       msg_url("删除成功","class.inc.php");
	//        break;

}

function dd( $id, $Db ) {
	$arr = $Db->get_all( "class", "parentid=$id" );

	$Db->deletedata( "class", "id=$id" );
	foreach ( $arr as $v ) {
		$temp = $v[ 'id' ];
		dd( $temp, $Db );
	}
}