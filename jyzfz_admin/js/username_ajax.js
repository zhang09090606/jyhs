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

//****************************************************************************

//用户名检测
function checkuser(){

	if(document.myform.username.value == ''){
		document.getElementById('usernote').innerHTML = '　';
	}
	else{
		if(document.myform.username.value.length < 2){
			document.getElementById('usernote').innerHTML = '<span class="regnotenok">用户名不能小于2位</span>';
			return false;
		}
		xmlhttprequest();
		var username = document.getElementById('username').value;
		var url = "admin_check.php?"+parseInt(Math.random()*(15271)+1)+'&action=checkuser&username='+username;
		xmlHttp.open("GET", url, true);
		xmlHttp.onreadystatechange = check_done;
		xmlHttp.send(null);
	}
}




function check_done(){
	if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
		document.getElementById('usernote').innerHTML = xmlHttp.responseText;
		if('<span class="regnotenok">用户名已存在</span>' == xmlHttp.responseText){
			document.getElementById('isuser').value = '0';
		}
		else{
			document.getElementById('isuser').value = '1';
		}
	}
}