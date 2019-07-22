<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>找回密码</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link href="css/register.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header_div" align="center">
    <font color="#FFFFFF" size="+3">找回密码</font>
</div>
<div>
    <p class="main_p" align="center">输入您的手机号:<p>
    <form action="register_check.php" method="post">
        <div class="main">
            <p class="input_p">+86</p>
            <input name="tel" class="main_input"  placeholder="请填写手机号">
        </div>
        <hr size="1px" color="#65C257" align="center" width="96%">
        <input type="submit" name="submit" id="submit" value="验证" class="push_button red" >
        <input type="hidden" name="action" value="send"/>
    </form>
</div>
</body>
</html>
