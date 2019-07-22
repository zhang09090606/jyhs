<?php
include( '../includes/init.php' );

$action = $_REQUEST[ 'action' ];
$url = "config.inc.php";
switch ( $action ) {
	case "config":
		$webname = $Db->check_str( $_POST[ 'webname' ], "网站名称不能为空", $url );
		$weburl = $Db->check_str( $_POST[ 'weburl' ], "网站地址不能为空", $url );
		$keyword = $Db->check_str( $_POST[ 'keyword' ], "网站关键字不能为空", $url );
		$description = $Db->check_str( $_POST[ 'description' ], "网站描述不能为空", $url );
		$copyright = $Db->check_str( $_POST[ 'copyright' ], "网站备案号不能为空", $url );
		$contact = $Db->check_str( $_POST[ 'contact' ], "技术支持不能为空", $url );
		$icp = $Db->check_str( $_POST[ 'icp' ], "ICP备案号不能为空", $url );
		$data = array(
			'webname' => $webname,
			'weburl' => $weburl,
			'keyword' => $keyword,
			'description' => $description,
			'copyright' => $copyright,
			'contact' => $contact,
			'icp' => $icp
		);
		$Db->updatedata( "config", $data, "id=1", $url, $url );
		msg_url( "修改成功", $url );
		break;
}
?>