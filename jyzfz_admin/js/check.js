function uuu(){
var cv = document.myform.classid.value;   

//alert(cv);return false;
	if(cv==94){
		window.location.href="infolist.add.inc.php?classid=94";return false; 
	}else {window.location.href="infolist.add.inc.php?classid="+cv;}
}
function chk()
{
	var classid = document.myform.classid.value;
	//alert(classid);
	if(classid=="-1")
	{
		document.myform.classid.focus();
		document.getElementById('classider').innerHTML="请选择";
		return false;
	}else{
	document.getElementById('classider').innerHTML="<img src='../../jyzfz_admin/js/images/onCorrect.gif' />";
	}
	
	var title = document.myform.title.value;
	if(title=="")
	{
		document.myform.title.focus();
		document.getElementById('titleer').innerHTML="请填写";
		return false;
	}else{
	document.getElementById('titleer').innerHTML="<img src='../../jyzfz_admin/js/images/onCorrect.gif' />";
	}
}
