//***************************************** 锁屏 ***********************************

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

function lockscreen(){
	xmlhttprequest();
	var url = 'lockscreen_do.php?'+parseInt(Math.random()*(15271)+1)+'&action=lock';
	xmlHttp.open("GET", url, true);
	xmlHttp.onreadystatechange = showlockscreen;
	xmlHttp.send(null);
}


function showlockscreen(){
	if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
		document.getElementById("graybg").style.display = "block";
		document.getElementById("lockscreen_win").style.display = "block";
		document.getElementById("lockscreen_win").innerHTML = '<div id="lockscreen_area"><label>密码：</label><input type="password" name="password" id="password" /><input name="lockscreen_enter" id="lockscreen_enter" type="image" src="../../admin/js/template/images/lockscreen_enter.png" onclick="checkpassword()" /><div id="lockscreen_note"></div></div>';
	}
}

function checkpassword(){
	var lockpassword = document.getElementById("password").value;
	if(lockpassword == ''){
		document.getElementById("lockscreen_note").innerHTML = "请输入解锁密码！";
		setInterval('document.getElementById("lockscreen_note").innerHTML = ""',5000);
	}
	else{
		xmlhttprequest();
		var url = 'lockscreen_do.php?'+parseInt(Math.random()*(15271)+1)+'&action=check&password='+lockpassword;
		xmlHttp.open("GET", url, true);
		xmlHttp.onreadystatechange = relockscreen;
		xmlHttp.send(null);
	}
}

function relockscreen(){
	if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
		reaction = xmlHttp.responseText;
		if(reaction == 'true'){
			document.getElementById("graybg").style.display = "none";
			document.getElementById("lockscreen_win").style.display = "none";
		}
		else{
			document.getElementById("lockscreen_note").innerHTML = "密码错误，请重新输入！";
			setInterval('document.getElementById("lockscreen_note").innerHTML = ""',5000);
		}
	}
}