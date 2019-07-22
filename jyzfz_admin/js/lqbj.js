$(document).ready(function(){
	$("#submit").click(function(){
		if($('#bj_name').val()==''){
			$('#bj_name').focus();
			$('#bj_name_error').html("<font color=red>产品必须填写</font>");
			return false;
		}
		
		if($('#bj_dj').val()==''){
			$('#bj_dj').focus();
			$('#bj_dj_error').html("<font color=red>等级必须填写</font>");
			return false;
		}
		

		
		if($('#bj_type').val()==''){
			$('#bj_type').focus();
			$('#bj_type_error').html("<font color=red>类型必须填写</font>");
			return false;
		}
		
		if($('#bj_ccnx').val()==''){
			$('#bj_ccnx').focus();
			$('#bj_ccnx_error').html("<font color=red>请选择生产年限</font>");
			return false;
		}
		
		
		if($('#bj_comes').val()==''){
			$('#bj_comes').focus();
			$('#bj_comes_error').html("<font color=red>价格来源必须填写</font>");
			return false;
		}
		
		
		
		if($('#bj_jg').val()==''){
			$('#bj_jg').focus();
			$('#bj_jg_error').html("<font color=red>价格必须填写</font>");
			return false;
		}
		
		if($('#bj_address').val()==''){
			$('#bj_address').focus();
			$('#bj_address_error').html("<font color=red>产地必须填写</font>");
			return false;
		}
	});
	
	$('#bj_name').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_name_error').html("<font color=red>产品必须填写</font>");
			return false;
		}else{
			$('#bj_name_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});	
	
	$('#bj_dj').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_dj_error').html("<font color=red>等级必须填写</font>");
			return false;
		}else{
			$('#bj_dj_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
	
	
	$('#bj_type').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_type_error').html("<font color=red>类型必须填写</font>");
			return false;
		}else{
			$('#bj_type_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#bj_ccnx').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_ccnx_error').html("<font color=red>请选择</font>");
			return false;
		}else{
			$('#bj_ccnx_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
		
		
	$('#bj_comes').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_comes_error').html("<font color=red>价格来源必须填写</font>");
			return false;
		}else{
			$('#bj_comes_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#bj_jg').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_jg_error').html("<font color=red>价格必须填写</font>");
			return false;
		}else{
			$('#bj_jg_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#bj_address').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#bj_address_error').html("<font color=red>产地必须填写</font>");
			return false;
		}else{
			$('#bj_address_error').html("<img src='../../jyzfz_admin/js/images/onCorrect.gif' />");
		}
	});
});