<?php
//define("常量名称","值");//创建一个常量,常量的名称必须是大写 数字字母开头

define("ROOT",$_SERVER['DOCUMENT_ROOT']."/");
//$_SERVER['DOCUMENT_ROOT'];//项目的站点 E:/xampp/htdocs/zx05
//echo ROOT;//E:/xampp/htdocs/zx05/
//echo ROOT."includes/conn.php";die;E:/xampp/htdocs/zx05/includes/conn.php
include(ROOT."includes/MyDb.php");
//include(ROOT."includes/Fun.php");
include(ROOT."includes/MyUpload.php");
include(ROOT."includes/message.php");
include(ROOT."includes/message_ok.php");
include(ROOT."includes/message_no.php");
include(ROOT."includes/f.php");
$Db = new MyDb("qdm190234501_db");

//$Fun = new Fun();
