<?php
include( "../includes/init.php" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>规则管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-1.4.2.min.js"></script>
	<script src="js/mark.inc.js"></script>
	<script src="My97DatePicker/WdatePicker.js"></script>
	
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="javascript:void(0);" class="on">修改规则</a>
				</li>
				<li><a href="mark.add.php">添加规则</a>
				</li>
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
					</select>
					<input type="text" name="cid" size="80" id="cid"/>
					<input type="text" name="title" size="80" id="title"/>
					<input type="submit" value="提交查询" id="bt"/>
				</fieldset>
				<table cellspacing="0" class="datalist" id="list" width="98%">
					<tr>
						<th width="5%">选择</th>
						<th width="10%">ID</th>
						<th width="15%">栏目名称</th>
						<th width="15%">标题</th>
						<th width="13%">时间</th>
						<th width="20%">操作</th>
					</tr>
					<?php
					//根据隐藏域的值来判断用户是否提交了表单	
					$title = !empty( $_REQUEST[ 'title' ] ) ? $_REQUEST[ 'title' ] : ""; //要查询的标题
					$cid = !empty( $_REQUEST[ 'cid' ] ) ? $_REQUEST[ 'cid' ] : ""; //栏目ID
					$se = !empty( $_REQUEST[ 'se' ] ) ? $_REQUEST[ 'se' ] : ""; //选择哪个查询项

					if ( $se == "a" ) {
						$where = "title like '%$title%'"; //查询的条件		
						$url = "&title=" . $title . "&se=" . $se;

					} elseif ( $se == 'b' ) {
							$where = "cname='$cid'"; //查询的条件		
							$url = "&cname=" . $cid . "&se=" . $se;

						} else {
							$where = "";
							$url = "";
						}
						//区分初始化的条件
					if ( $se == "" ) {
						$wheres = '';
					} else {
						$wheres = "where $where";
					}

					$sql = "select * from lo_marks $wheres";

					$res = $Db->query( $sql );
					$count = $Db->rows( $res );
					$f = new Page( $count, 4, $url );
					$arr = $Db->get_all( "marks", $where, "*", "id desc", $f->limit() );
					$temp = 0;
					foreach ( $arr as $row ) {
						$temp++;
						?>
					<tr onMouseOver="this.style.backgroundColor='#79D3FF'" onMouseOut="this.style.backgroundColor='#fff'">
						<td align="center"><input type="checkbox" name="id[]" id="id[]" value="<?php echo $row['id']?>"/>
						</td>
						<td align="center">
							<?php echo $temp?>
						</td>
						<td align="center">
							<?php echo $row['cname']?>
						</td>
						<td align="center">
							<?php echo substr($row['title'],0,30)?>
						</td>
						<td align="center">
							<?php echo $row['postime']?>
						</td>
						<td align="center"><a onclick="return confirm('确定删除?')" href="mark_check.php?id=<?php echo $row['id']?>&amp;action=del">删除</a> &nbsp;&nbsp;
							<!-- <a onclick="return confirm('确定删除?')" href="news_check.php?id=<?php echo $row['id']?>&action=del">删除</a> &nbsp;&nbsp; -->
							<a href="mark.edit.php?id=<?php echo $row['id']?>" title="修改" class="thickbox">修改</a> &nbsp;</td>
					</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="4" align="center"><a href="javascript:alls()">全选</a> <a href="javascript:invert()">反选</a> <a href="javascript:removeall()">取消</a> <a href="javascript:dels('news_check.php?action=del_all')">删除</a>
						</td>
						<td colspan="2" align="center">
							<?php echo $f->PageShow()?>
						</td>
						<td align="center">&nbsp;</td>
						<td align="center">&nbsp;</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>

</html>