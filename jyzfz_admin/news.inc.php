<?php
include("../includes/init.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>新闻管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/jquery-1.4.2.min.js"></script>
<script  src="My97DatePicker/WdatePicker.js"></script>
<script>
function alls()
{
	//获取表单元素的个数，在获取每个元素的状态进行判断
	for(i=0;i<document.myform.elements.length;i++){
		
		f = document.myform.elements[i];//获取每一个元素
		
		//判断每个元素是否选中，选中的元素：checked  选中的状态 true  未选中false
		if(f.checked==false){
			f.checked=true;
		}
		
	}		
}
function removeall()
{
	//获取表单元素的个数，在获取每个元素的状态进行判断
	for(i=0;i<document.myform.elements.length;i++){
		
		f = document.myform.elements[i];//获取每一个元素
		
		//判断每个元素是否选中，选中的元素：checked  选中的状态 true  未选中false
		if(f.checked==true){
			f.checked=false;
		}
		
	}		
}
function invert()
{
	//获取表单元素的个数，在获取每个元素的状态进行判断
	for(i=0;i<document.myform.elements.length;i++){
		
		f = document.myform.elements[i];//获取每一个元素
		
		//判断每个元素是否选中，选中的元素：checked  选中的状态 true  未选中false
		if(f.checked==true){
			f.checked=false;
		}else{
			f.checked = true;	
		}
		
	}		
}

function dels(url)
{	
	
	//$('#ck').is(':checked');  ID 选择器
	t = $("input[type='checkbox']").is(":checked");
	if(t==false){
		alert('请选择一个要删除的目标');
		return  false;
	}else{
	document.myform.action=url;//提交地址
	document.myform.submit();//模拟提交的按钮	
	}			
}
$(document).ready(function(e) {		
	$('#title').hide();
	$('#cid').hide();
	$('#date').hide();
	$('#d4321').hide();	
	$('#d4322').hide();				
});	
function test()
{
	var se = $('#se').val();
	if(se =='a'){
		$('#title').show();
		$('#cid').hide();
		$('#date').hide();
		$('#d4321').hide();	
		$('#d4322').hide();		
	}else if(se == 'b'){
		$('#title').hide();
		$('#date').hide();
		$('#d4321').hide();	
		$('#d4322').hide();		
		$('#cid').show();
	}else if(se == 'c'){
		$('#title').hide();
		$('#date').show();
		$('#d4321').hide();	
		$('#d4322').hide();		
		$('#cid').hide();
	}else if(se == 'd'){
		$('#title').hide();
		$('#date').hide();
		$('#d4321').show();	
		$('#d4322').show();		
		$('#cid').hide();
	}else{
		$('#date').hide();
		$('#d4321').hide();	
		$('#d4322').hide();		
		$('#title').hide();
		$('#cid').hide();	
	}
}
</script>
</head>
<body>
<div id="wrap">
  <div class="tab">
    <ul>
      <li><a href="javascript:void(0);" class="on">新闻管理</a></li>
      <li><a href="news.add.php">添加新闻</a></li>
    </ul>
  </div>
  <div class="main">
  <form name="myform" method="post" action="">   
    <fieldset>
      <legend>操作提示</legend>
    搜索条件：
    <select name="se" id="se" onchange="test()">
    	<option value="">请选择</option>
        <option value="a">查询标题</option>
        <option value="b">查询栏目</option>
        <option value="c">查询单日期</option>
        <option value="d">查询多日期</option>
    </select>
     <select name="cid" id="cid">        
           <?php
           $rows = $Db->get_all("class","","*,concat(path,'-',id)as paths"," paths asc");
           foreach($rows as $row){
           ?>
          <option value="<?php echo $row['id']?>">
          <?php
          	$arr = explode("-",$row['path']);
			$length = count($arr);//统计数组的长度
			echo $length;
			echo str_repeat('-->',$length);
		  ?>
		  |-<?php echo $row['classname']?>
          </option>
           <?php
           }
           ?>
          </select>
          <input type="text" name="date" id="date" size="20" onclick="WdatePicker()"  />
          <input type="text" class="Wdate" name="ptimes1" id="d4321"  onFocus="WdatePicker({maxDate:'#F{$dp.$D(\'d4322\',{d:-2});}'})"/>
<input type="text" class="Wdate" name="ptimes2" id="d4322" onFocus="WdatePicker({minDate:'#F{$dp.$D(\'d4321\',{d:2});}'})"/>
    <input type="text" name="title"  size="80"  id="title"/>
    <input type="submit" value="提交查询" id="bt" />
    </fieldset>
    <table cellspacing="0" class="datalist" id="list" width="98%">
      <tr>
        <th width="5%">选择</th>
        <th width="6%">ID</th>
        <th width="12%">栏目名称</th>
        <th width="12%">标题</th>
        <th width="21%">图片</th>
        <th width="12%"> 作者</th>
        <th width="13%">时间</th>
        <th width="19%">操作</th>
      </tr>
      <?php
	    //根据隐藏域的值来判断用户是否提交了表单	
	 $title = !empty($_REQUEST['title'])?$_REQUEST['title']:"";//要查询的标题
     $cid = !empty($_REQUEST['cid'])?$_REQUEST['cid']:"";//栏目ID
	 $se = !empty($_REQUEST['se'])?$_REQUEST['se']:"";//选择哪个查询项
	 $date = !empty($_REQUEST['date'])?$_REQUEST['date']:"";//单日期
	 $ptimes1 = !empty($_REQUEST['ptimes1'])?$_REQUEST['ptimes1']:"";//起始日期
	 $ptimes2 = !empty($_REQUEST['ptimes2'])?$_REQUEST['ptimes2']:"";//截止日期
	 
	  if($se=="a"){		  
		  $where = "title like '%$title%'";//查询的条件		
		  $url = "&title=".$title."&se=".$se;			
	  }elseif($se =='b'){
		   $where = "cid=$cid";//查询的条件		
		  $url = "&cid=".$cid."&se=".$se;		 		  		
	  }elseif($se =='c'){
		   $where = "postime like '$date%'";//查询的条件		
		  $url = "&date=".$date."&se=".$se;		 		  		
	  }elseif($se =='d'){
          $date2 = date("Y-m-d",strtotime("$ptimes2 + 1day"));
          //echo $date2;die;
		   $where = "postime between '$ptimes1%' and '$date2%' ";//查询的条件
		  $url = "&ptimes1=".$ptimes1."&ptimes2=".$ptimes2."&se=".$se;
	  }else{
		  $where = "";
		  $url = "";		
	  }
	  //区分初始化的条件
	  if($se == ""){
		  $wheres = '';
	  }else{
		  $wheres = "where $where";
      }
	  
    $sql = "select * from lx_news $wheres";
	$res = $Db->query($sql);
	$count = $Db->rows($res); 
	$f = new Page($count,4,$url);
    $arr = $Db->get_all("news",$where,"*","id desc",$f->limit());  
    foreach($arr as $row){
    ?>
      <tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
        <td align="center"><input type="checkbox" name="id[]" id="id[]" value="<?php echo $row['id']?>" /></td>
        <td align="center"><?php echo $row['id']?></td>
        <td align="center"><?php echo $row['cname']?>[<?php echo $row['cid']?>]</td>
        <td align="center"><?php echo substr($row['title'],0,30)?></td>
        <td align="center"><img src="<?php echo $row['../admin/picurl']?>" alt="<?php echo $row['title']?>" width="50" height="50"/></td>
        <td align="center"><?php echo $row['author']?></td>
        <td align="center"><?php echo $row['postime']?></td>
        <td align="center"><a onclick="return confirm('确定删除?')" href="news_check.php?id=<?php echo $row['id']?>&amp;action=del">删除</a> &nbsp;&nbsp; 
          <!-- <a onclick="return confirm('确定删除?')" href="news_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; --> 
          <a href="news.edit.php?id=<?php echo $row['id']?>" title="修改" class="thickbox">修改</a> &nbsp;</td>
      </tr>
      <?php
    }
    ?>
      <tr>
        <td colspan="4" align="center"><a href="javascript:alls()">全选</a> <a href="javascript:invert()">反选</a> <a href="javascript:removeall()">取消</a> <a href="javascript:dels('news_check.php?action=del_all')">删除</a></td>
        <td colspan="2" align="center"><?php echo $f->PageShow()?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
    </table>
    </form>
  </div>
</div>
</body>
</html>