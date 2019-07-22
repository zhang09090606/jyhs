<?php
	function msg_url_ok($Msg,$url){
		
?>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
	<meta http-equiv="refresh" content="1.5; url=<?=$url?>">
		<style>
			body{font-size:12px;}
			#notice { margin: 100px auto 0; background: #FFF; border-style: solid; border-color: #86B9D6 #B2C9D3 #B2C9D3; border-width: 4px 1px 1px;font-size:12px; }
			#notice_message { padding: 1.5em 1em; font-size: 1.17em; font-size:12px;}
			#notice_message.warning { color:red; }
			#notice_links { margin: 0; line-height: 2em; border-top: 1px solid #F5F5F5; background: #F5FBFF; padding: 0 1em; }
			#notice_links a { margin: 0 2px;color:black; }
		</style>
	<center>
	<table summary="" id="notice" cellpadding="0" cellspacing="0" border="0">
		<tr>
		
			<td width="404" align="center" class="warning" id="notice_message">&nbsp;</td>
			<!--<td id="notice_message" class="warning"><span style='font-size:18px;color:#9C0D3F;font-weight:bod;'><?=$Msg?></span></td>-->
		</tr>
		<tr>
		<td align="center" class="warning" id="notice_message"><img   src="../includes/Ok.jpg"/></td>
		</tr>
		<tr>
		  <td align="center" class="warning" id="notice_message"><span style='font-size:18px;color:#9C0D3F;font-weight:bod;'>
          <?=$Msg?>
          </span></td>
	  </tr>
	</table>
	<center/>
<?php
}
?>

