$(function(){
	$("#sumbit").click(function(){
		if($("#peo").val()==""){
			alert("联系人不能为空");
		}else if($("#tel").val()==""){
			alert("电话不能为空");
		}else if($("#add").val()==""){
			alert("您还未在地图上选择您的位置");
		}else if($("#adds").val()==""){
			alert("详细地址不能为空");
		}else{
			$("form").submit();
		}
	});
});