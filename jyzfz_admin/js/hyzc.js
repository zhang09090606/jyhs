$(document).ready(function(){
	$("#submit").click(function(){
		if($('#user').val()==''){
			$('#user').focus();
			$('#chk').html("<font color=red>用户名须填写</font>");
			return false;
		}
		
		if($('#password').val()==''){
			$('#password').focus();
			$('#password_error').html("<font color=red>密码必须填写</font>");
			return false;
		}
		

		
		if($('#repassword').val()==''){
			$('#repassword').focus();
			$('#repassword_error').html("<font color=red>确认密码必须填写</font>");
			return false;
		}

		
		if($('#email').val()==''){
			$('#email').focus();
			$('#email_error').html("<font color=red>邮箱必须填写</font>");
			return false;
		}
	});
	
	


/*	
	$("#user").blur(function(){ 
		$.ajax({ 
			url:"../../../b.php", //请求验证页面 
			type:"GET", //请求方式 可换为post 注意验证页面接收方式 
			data:"user="+$("#user").val(), //取得表文本框数据，作为提交数据 注意前面的 user 此处格式 key=value 其他方式请参考ajax手册 
			success: function(data) 
			{ //请求成功时执行操作 
			$("#user_error").html(data); //向ID为chk的元素内添加html代码 
			} 
		}); 
	}); */
	
	$('#user').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#user_error').html("<font color=red>用户必须填写</font>");
			return false;
		}else{
			$('#user_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#password').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#password_error').html("<font color=red>密码必须填写</font>");
			return false;
		}else{
			$('#password_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
	
	
	$('#repassword').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#repassword_error').html("<font color=red>确认必须填写</font>");
			return false;
		}else if($('#repassword').val()!=$('#password').val()){
			$(this).focus();
			$('#repassword_error').html("<font color=red>确认密码与密码不符</font>");
			return false;
		}else{
		$('#repassword_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
/*	var email = document.my.email.value;
 	 var reg = /^\w+((-\w+)|(\.\w+)|(_\w))*\@{1}\w+(\.{1}\w+)*\.{1}[a-zA-Z]{2,5}$/;
	 
	$('#email').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#email_error').html("<font color=red>邮箱必须填写</font>");
			return false;
		}else if(!reg.test(email)){
			$("#email").focus();
			$('#email_error').html("<font color=red>请填写正确邮箱地址</font>");
			return false;
		}else{
			$('#email_error').html("<img src='../../admin/js/images/onCorrect.gif' />");
			}
	});*/
	
	
	var email = document.my.email.value;
	$('#email').blur(function(){
							  alert('a');
		if($(this).val()==''){
			$(this).focus();
			$('#email_error').html("<font color=red>邮箱必须填写</font>");
			return false;
		}
	    var reg = /^\w+((-\w+)|(\.\w+)|(_\w))*\@{1}\w+(\.{1}\w+)*\.{1}[a-zA-Z]{2,5}$/;
        if (!reg.test(email)) {
			$(this).focus();
			$('#email_error').html("<font color=red>请填写正确邮箱地址</font>");
			return false;
		}
		$('#email_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
	});
	
	
	
});