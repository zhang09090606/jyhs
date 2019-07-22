<?php
include("../includes/init.php");
$id = $_GET['id'];
$row = $Db->get_one("news","id=$id");
$cid = $row['cid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>新闻管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script language="javascript" type="text/javascript">			
			var editor;
			KindEditor.ready(function(K1) {
				editor = K1.create("textarea[name='content,description']", {
					allowFileManager : true
				});
			});
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
				K('#image').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#picurl').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#picurl').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});	


</script>
</head>
<body>
<div id="wrap">
  <div class="tab">
    <ul>
      <li><a href="news.inc.php">新闻管理</a></li>
      <li><a href="news.add.php" class="on">添加新闻</a></li>     
    </ul>
  </div>
  <div class="main">
    <fieldset>
      <legend>操作提示</legend>
      1：新闻名称不能为空；
    </fieldset>
    <form action="news_check.php" method="post" name="myform">     
      <table cellspacing="0" class="sub">
        <tr>
          <td width="100" align="right">栏目名称：</td>
          <td>
           <select name="cid" id="cid">
               <option value="<?php echo $row['cid']?>"><?php echo $row['cname']?></option>
           <?php
           $rows = $Db->get_all("class","id not in($cid)","*,concat(path,'-',id)as paths"," paths asc");
           foreach($rows as $v){
           ?>
          <option value="<?php echo $v['id']?>">
          <?php
          	$arr = explode("-",$v['path']);
			$length = count($arr);//统计数组的长度
			echo $length;
			echo str_repeat('-->',$length);
		  ?>
		  |-<?php echo $v['classname']?>
          </option>
           <?php
           }
           ?>
          </select>
          </td>
        </tr>
        <tr>
          <td width="100" align="right">新闻标题：</td>
          <td><input type="text" name="title"  size="60"  value="<?php echo $row['title']?>" />
            </td>
        </tr>
        <tr>
          <td width="100" align="right">上传作者：</td>
          <td><input type="text" name="author"  size="60" value="<?php echo $row['author']?>" />
            </td>
        </tr>
         <tr>
          <td align="right">图片上传：</td>
          <td><input name="picurl" id="picurl" type="text" size="100" value="<?php echo $row['picurl']?>" /> <input type="button" name="img" id="image" value="上传图片" />
              <img src="<?php echo $row['../admin/picurl']?>" width="50" alt=""/>
          </td>
        </tr>
        <tr>
          <td width="100" align="right">内容：</td>
          <td><textarea name="content" style="width:750px;height:450px;display:none;" id="content"><?php echo $row['content']?></textarea></td>
        </tr>
        <tr class="bg2">
          <td></td>
          <td>&nbsp;</td>
        </tr>
        <tr class="bg2">
          <td></td>
          <td><input type="submit" class="button"  value="修改管理" />
            <input type="reset" class="button" value="取消返回" />
            <input type="hidden" name="action" value="edit" />
            <input type="hidden" name="gid" value="<?php echo $row['id']?>" />
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
</body>
</html>