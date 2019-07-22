<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>联系我们</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<link href="css/message.css" rel="stylesheet" type="text/css" />

</head>
<script src="js/jquery-1.9.1.min.js"></script>
<body style="margin:0; padding:0;">
		<div class="head" align="center"><font color="#FFFFFF" size="+2">留言</font></div>
	<img src="images/fanhui.png" class="arrow" onclick="window.history.back(-1);" >
    <form action="message.check.php" method="post" class="STYLE-NAME">
		<p class="contact-input" align="center">
			<textarea type="text" id="con" name="con" placeholder="请输入留言内容">
			</textarea>
		</p>
   <input id="mes" type="button" class="push_button red" value="提交留言">
    </form>
	
</body>
<script>
	$("#mes").click(function(){
		  alert("上传成功，感谢您的留言");
			window.history.back(-1);
	})
		
	$(".arrow").click(function(){
		$(this).css("background","#E4E4E4");
		
	});
	</script>
</html>
