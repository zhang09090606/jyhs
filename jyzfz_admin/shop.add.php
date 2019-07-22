<?php
include("../includes/init.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>商品管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/jquery-1.4.2.min.js"></script>
<script>
function ff()
{
	var mid = $('#m_id').val();	
	$.ajax({
		
		type:"POST",
		url:"shop_check.php",
		data:"mid="+mid+"&action=ajax",
		dataType:"html",
		success: function(msg){
			$('#price').attr("value",msg);
		}
	});

}
</script>
</head>
<body>
<div id="wrap">
  <div class="tab">
    <ul>
      <li><a href="shop.inc.php">商品管理</a></li>
      <li><a href="shop.add.php" class="on">添加商品</a></li>     
    </ul>
  </div>
  <div class="main">
    <fieldset>
      <legend>操作提示</legend>
      1：商品名称不能为空；
    </fieldset>
    <form action="shop_check.php" method="post" name="myform">     
      <table cellspacing="0" class="sub">
        <tr>
          <td width="100" align="right">菜品名称：</td>
          <td>
          <select name="m_id" id="m_id" onchange="ff()">
              <option value="">--请选择--</option>
              <?php
              $arr = $Db->get_all("menu");
              foreach($arr as $v){
              ?>
              <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
              <?php
              }
              ?>
          </select>
          </td>
        </tr>
        <tr>
          <td width="100" height="30" align="right">数量：</td>
          <td><input type="text" name="num" id="password" size="20"  />
           </td>
        </tr>
        <tr class="bg2">
          <td align="right">单价：</td>
          <td><input type="text" name="price" id="price" size="20" readonly /></td>
        </tr>
        <tr class="bg2">
          <td align="right">购买人：</td>
          <td><input type="text" name="buy_people" id="buy_people" size="20"  /></td>
        </tr>
        <tr class="bg2">
          <td></td>
          <td><input type="submit" class="button"  value="添加商品" />
            <input type="reset" class="button" value="取消返回" />
            <input type="hidden" name="action" value="add" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>
</body>
</html>