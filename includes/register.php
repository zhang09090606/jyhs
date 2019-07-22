<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>无标题文档</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link href="css/register.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header_div" align="center">
    <font color="#FFFFFF" size="+3">注册</font>
</div>
<div>
    <p class="main_p" align="center">手机号注册:<p>
    <form action="register_check.php" method="post">
        <div class="main">
            <p class="input_p">+86</p>
            <input name="tel" class="main_input"  placeholder="请填写手机号">
        </div>
        <hr size="1px" color="#65C257" align="center" width="96%">
        <input type="submit" name="submit" id="submit" value="注册" class="push_button red" >
        <input type="hidden" name="action" value="send"/>
    </form>
</div>
</body>
</html>
