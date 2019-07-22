var xmlHttp;

function xmlhttprequest(){
	if(window.ActiveXObject){
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	else if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}
	else{
		alert('您的浏览器不支持Ajax技术！');
	}
}

//显示列表
function send_email(){
	var msg = document.form.msg.value;
	if(msg == ''){
		document.getElementById('length').innerHTML = '<p style="color:red;">请输入反馈内容，谢谢</p>';
		return;
	}
	xmlhttprequest();
	var msgstring = "msg="+msg+"";
	var url = "send_email.php?"+parseInt(Math.random()*(15271)+1);
	xmlHttp.open("POST", url, true);
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlHttp.onreadystatechange = send_email_done;
	xmlHttp.send(msgstring);
	setInterval('hiddendiv()',3000);
}

//输出列表
function send_email_done(){
	if(xmlHttp.readyState == 1){
		document.getElementById('emailmsg').innerHTML = '<br /><div class="loading"><img src="../../jyzfz_admin/js/template/images/loading.gif">邮件发送中...</div>';
	}
	if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
		document.getElementById('emailmsg').innerHTML = xmlHttp.responseText;
	}
}

//****************************************************************************

function AutoScroll(obj){
        $(obj).find("ul:first").animate({
                marginTop:"-25px"
        },500,function(){
                $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
        });
}
$(document).ready(function(){
setInterval('AutoScroll("#scrollDiv")',5000)
});

function showdiv(){
	document.getElementById("graybg").style.display = "block";
	document.getElementById("popup_window").style.display = "block";
	document.getElementById("emailmsg").innerHTML = '<form name="form" id="form" method="post"><textarea name="msg" id="msg" class="smgarea" onkeyup="checklength(this);"></textarea><span class="fr"><a href="javascript:;" onclick="send_email()" class="send_msg"><img src="../../jyzfz_admin/js/template/images/send_msg.gif" /></a></span><span id="length" class="length"></span></form>';
} 

function hiddendiv(){ 
	document.getElementById("graybg").style.display = "none";
	document.getElementById("popup_window").style.display = "none";
}

function checklength(txt){
	document.getElementById("length").innerHTML = '您已经输入了： '+txt.value.length+' 个字';
}