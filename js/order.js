 	
	var myarray = new Array();
	var a;
$(function(){
	var class1=$("#class").html();
	a = $(".select option:selected").attr('id');
	$.ajax({
		 type: "post",
		 async:false,
		 url:"order_check.php" ,
		 data: {id:"0",class:class1,action:"sum"},
		 dataType: "json",
		 success: function(data){
			$.each(data,function(n,value){

				var t=n+1;
				myarray[t]=new Array();
				$.each(value,function(m,value2){
					var s=n+1;
					myarray[s][m]=value2;
				});
			});	
			 if(myarray[a][5]==0){
			
				 var str="参考价格：无";
				 $("#p1").html(str);
				  $("#price").html("待鉴定");
				 $("#p").show();
			 }
		 }
	});
	$("#select").change(function(){
		$("#num").val("");
		$("#price").html("￥0.00");
		a = $(".select option:selected").attr('id');
		if(myarray[a][5]!=0){
			var str1="参考价格："+myarray[a][5]+"元/kg";
			$("#p1").html(str1);
			$("#p").hide();
			$("#price").show();
			$("#num").show();
			$("#p2").show();
			$("#p3").show();
			 	
			 
		 }else{
			 var str="参考价格：无";
			 $("#p1").html(str);
			 $("#price").html("待鉴定");
			 $("#br").css("display","inline");
			
			 $("#p3").hide();
			 $("#p").show();
			 $("#p").html(myarray[a][4]);		 
		 }
		var str2="order_upload.php?gid="+myarray[a][0];
		$("#form").attr("action",str2);
		var str3=myarray[a][3].substring(3,myarray[a][3].length);
		$("#pic").attr("src",str3);
	});	
	
		$("#num").change(function(){
			clearNoNum(this);
		});
	
});
function clearNoNum(obj){ 
    obj.value = obj.value.replace(/[^\d.]/g,"");  //清除“数字”和“.”以外的字符  
    obj.value = obj.value.replace(/\.{2,}/g,"."); //只保留第一个. 清除多余的  
    obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$","."); 
    obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3');//只能输入两个小数  
    if(obj.value.indexOf(".")< 0 && obj.value !=""){//以上已经过滤，此处控制的是如果没有小数点，首位不能为类似于 01、02的金额 
        obj.value= parseFloat(obj.value); 
			var con=$("#num").val();
			var price=myarray[a][5]*con;
			price=Math.round(price * 100) / 100;
			if(price==0){
				$("#price").html("待鉴定");
			}else{
				$("#price").html("￥"+price);
			}
			
    }
} 
function check(){
	if($('#num').val()==""){
		alert("请选择废品重量");
		return false;
	}else{
		return true;
	}
}