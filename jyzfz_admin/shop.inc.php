<?php
include("../includes/init.php");
include('../includes/page.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>商品管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script  src="My97DatePicker/WdatePicker.js"></script>
<script src="js/jquery-1.4.2.min.js"></script>
<script>
$(document).ready(function(e) {			
	$('#date').hide();
	$('#d4321').hide();	
	$('#d4322').hide();				
});	
function test()
{
	var se = $('#se').val();
	if(se == 'c'){
		
		$('#date').show();
		$('#d4321').hide();	
		$('#d4322').hide();		
		
	}else if(se == 'd'){
		
		$('#date').hide();
		$('#d4321').show();	
		$('#d4322').show();		
	
	}else{
		$('#date').hide();
		$('#d4321').hide();	
		$('#d4322').hide();					
	}
}

</script>
</head>
<body>
<div id="wrap">
  <div class="tab">
    <ul>
      <li><a href="javascript:void(0);" class="on">商品管理</a></li>
      <li><a href="shop.add.php">添加商品</a></li>
    </ul>
  </div>
  <div class="main">
   <form name="myform" method="post" action="">   
    <fieldset>
      <legend>操作提示</legend>
       <select name="se" id="se" onchange="test()">
    	<option value="">请选择</option>       
        <option value="c">查询单日期</option>
        <option value="d">查询多日期</option>
    </select>
     <input type="text" name="date" id="date" size="20" onclick="WdatePicker()"  />
 <input type="text" class="Wdate" name="ptimes1" id="d4321"  onFocus="WdatePicker({maxDate:'#F{$dp.$D(\'d4322\',{d:-2});}'})"/>
<input type="text" class="Wdate" name="ptimes2" id="d4322" onFocus="WdatePicker({minDate:'#F{$dp.$D(\'d4321\',{d:2});}'})"/>
 <input type="submit" value="提交查询" id="bt" />
    </fieldset>
    <table cellspacing="0" class="datalist" id="list" width="98%">
      <tr>
        <th width="9%">ID</th>
        <th width="16%"> 商品名称 </th>
        <th width="19%"> 商品单价 </th>
        <th width="8%">数量</th>
        <th width="8%">总价</th>
        <th width="13%">购买人</th>
        <th width="12%">时间</th>
        <th width="15%">操作</th>
      </tr>
	<?php
	$se = !empty($_REQUEST['se'])?$_REQUEST['se']:"";
	$date = !empty($_REQUEST['date'])?$_REQUEST['date']:"";
	$ptimes1 = !empty($_REQUEST['ptimes1'])?$_REQUEST['ptimes1']:"";
	$ptimes2 = !empty($_REQUEST['ptimes2'])?$_REQUEST['ptimes2']:"";
	if($se=='c'){
		 $where = "postime like '$date%'";//查询的条件		
		  $url = "&date=".$date."&se=".$se;	
	}elseif($se=='d'){
		  $date2 = date("Y-m-d",strtotime("$ptimes2 + 1day"));
          //echo $date2;die;
		   $where = "postime between '$ptimes1%' and '$date2%' ";//查询的条件
		  $url = "&ptimes1=".$ptimes1."&ptimes2=".$ptimes2."&se=".$se;
	}else{
		$dates = date("Y-m-d");
		 $where = "postime like '$dates%'";
		  $url = "";	
	}	
	$wheres = "where $where";
	//echo $wheres;
    $sql = "select * from lx_shop $wheres";
	$res = $Db->query($sql);
	$count = $Db->rows($res); 
	$f = new Page($count,2,$url);
    $arr = $Db->get_all("shop",$where,"*","id desc",$f->limit());  
    foreach($arr as $row){
    ?>
      <tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
        <td align="center"><?php echo $row['id']?></td>
        <td align="center"><?php echo $row['m_name']?></td>
        <td align="center"><?php echo $row['price']?>/元</td>
        <td align="center"><?php echo $row['num']?></td>
        <td align="center"><?php echo $row['zprice']?>/元</td>
        <td align="center"><?php echo $row['buy_people']?></td>
        <td align="center"><?php echo $row['postime']?></td>
        <td align="center">
          <a onclick="return confirm('确定删除?')" href="shop_check.php?id=<?php echo $row['id']?>&amp;action=del">删除</a> &nbsp;&nbsp;
          <!-- <a onclick="return confirm('确定删除?')" href="shop_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; -->
        <a href="../admin/shop.edit.php?id=<?php echo $row['id']?>" title="修改密码" class="thickbox">修改</a> &nbsp;</td>
      </tr>
	<?php
    }
    ?>
      <tr>
        <td colspan="6" align="center">&nbsp;</td>
        <td align="center">今日总价：</td>
        <td align="center"><?php echo $Db->get_zprice("shop",$where)?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="10" align="center"><?php echo $f->PageShow()?></td>
      </tr>
    </table>
    </form>
  </div>
</div>
</body>
</html>