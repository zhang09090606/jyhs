<?php
include( "../includes/init.php" );
$row = $Db->get_one( "config", "id=1" );
echo $row[ 'webname' ];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>系统设置</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>

	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="javascript:void(0);" class="on" id="1">基本配置</a>
				</li></li>
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				合理的网站配置，会使您的网站更加快速高效。
			</fieldset>
			<form action="config.check.php" method="post" name="myform" onsubmit="return checkform();">
				<input type="hidden" name="action" value="config"/>
				<table width="100%">
					<tr>
						<td>
							<div id="tab_1">
								<table class="sub">
									<tr>
										<td width="200" align="right">网站名称：</td>
										<td><input type="text" name="webname" value="<?=$row['webname']?>" size="50" id="webname"/>
										</td>
									</tr>
									<tr>
										<td width="200" align="right">网站地址：</td>
										<td>
											<input type="text" name="weburl" size="50" value="<?=$row['weburl']?>" id="weburl"/>
											<span>请填写完整URL地址，以"/"结尾</span> </td>
									</tr>
									<tr>
										<td width="200" align="right">网站关键字：</td>
										<td>
											<input type="text" name="keyword" value="<?=$row['keyword']?>" size="50" id="keyword"/>
											<span>设置Meta标签的关键字，用英文逗号分隔</span> </td>
									</tr>
									<tr>
										<td width="200" align="right">网站描述：</td>
										<td>
											<textarea name="description" cols="50" rows="5" id="description">
												<?=$row['description']?>
											</textarea>
											<span>设置Meta标签的描述信息</span>
										</td>
									</tr>
									<tr>
										<td align="right">技术支持：</td>
										<td>
											<textarea name="contact" cols="50" rows="5" id="contact">
												<?=$row['contact']?>
											</textarea>
										</td>
									</tr>
									<tr>
										<td align="right">版权信息：</td>
										<td>
											<textarea name="copyright" cols="50" rows="5" id="copyright">
												<?=$row['copyright']?>
											</textarea>
										</td>
									</tr>
									<tr>
										<td align="right">网站ICP备案序号：</td>
										<td><input type="text" name="icp" value="<?=$row['icp']?>" id="icp"/>
										</td>
									</tr>
								</table>
							</div>
							<div id="tab_2" style="display:none">
								<table class="sub">
									<tr>
										<td width="200" align="right">是否开启词语过滤： </td>
										<td>
											<input type="radio" class="radio" name="badwords" value="true"/>启用
											<input type="radio" class="radio" name="badwords" value="false"/> 关闭
											<span>关闭后, 将不屏蔽词语. 这样将节省大量系统资源！ </span>
										</td>
									</tr>
									<tr>
										<td width="200" align="right" valign="top">词语过滤：</td>
										<td>
											<textarea name="badword_show" cols="70" rows="10"></textarea>
											<span>每组词语用 | 隔开!</span>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="保存配置" class="button" style="margin-left:160px"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<dd style="display:none;" id="webname_div"></dd>
</body>

</html>