<?php
include('../includes/init.php');
$id = $_GET['id'];
$pic=$_GET['pic'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>分类管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/zzstyle.css">
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/Validform_v5.3.2.js"></script>
</head>
<body>
<div id="wrap">
  <div class="tab">
    <ul>
      <li><a href="class.inc.php">分类管理</a></li>
      <li><a href="class.add.php" class="on">修改分类</a></li>
    </ul>
  </div>
  <div class="main">
    <fieldset>
      <legend>操作提示</legend>
      1：分类名称不能为空；
    </fieldset>
    <form action="class_check.php" method="post" name="myform"  enctype="multipart/form-data" class="demoform">
      <table cellspacing="0" class="sub">
      	<tr>
          <td width="100" align="right">图片：</td>
            <td width="100"> <input type="file" name="file" id="file" value="上传图片" /></td>
            <td></td>
        </tr>
        <tr class="bg2">
          <td></td>
          <td><input type="submit" class="button"  value="修改管理" />
          <input type="hidden" name="gid"  value="<?php echo $id;?>"/>
            <input type="reset" class="button" value="取消返回" />
            <input type="hidden" name="action" value="editpic" /></td>
              <input type="hidden" name="pic0" value="<?php echo $pic ?>" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<script>
		var vf = $(".demoform").Validform({
			tiptype:2,
				datatype:{
				"isfile":function CheckWorkFile(){
				var file=document.getElementById("file").value;
				if(file.length<1){
					return "请选择图片";
				}
				var filepath = $("input[name='file']").val();
                var extStart = filepath.lastIndexOf(".");
                var ext = filepath.substring(extStart, filepath.length).toUpperCase();
                if (ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {     
                    return "图片限于bmp,png,gif,jpeg,jpg格式";
                }
            	 var fileSize =  document.getElementById('file').files[0];
				if(fileSize.size>1048576){
					return "图片大小不符合标准最大不超过1MB";
				}		
				}
			}
			
		});

		vf.addRule(
		[
			{
				ele:"[name=file]",
				datatype:"isfile",
			},
		]
		);
</script>
</body>
</html>