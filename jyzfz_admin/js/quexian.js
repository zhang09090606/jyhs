$(document).ready(function(){
//alert('a');
	$(".bbb").hide();
	$(".ccc").hide();
	$(":radio[name='tz']").change(function(){
		if($(this).val()=='1'){
				$(".bbb").hide();
				$(".ccc").hide();
				$(".aaa").show();
		}else if($(this).val()=='2'){
				$(".aaa").hide();
				$(".ccc").hide();
				$(".bbb").show();
		}else if($(this).val()=='3'){
				$(".bbb").hide();
				$(".aaa").hide();
				$(".ccc").show();
		}
		
	});
	//验证发现人
	$("#submit").click(function(){
		if($('#qx_fxr').val()==''){
			$('#qx_fxr').focus();
			$('#err_qx_fxr').html("<font color=red>发现人必须填写</font>");
			return false;
		}
		//验证复选框必须选择一个或者多个
		var chk_value =[];    
	  $(':checkbox[name="qx_fenlei[]"]:checked').each(function(){    
	   chk_value.push($(this).val());    
	  });    
	  if(chk_value.length==0){
	  		$('#err_qx_fenlei').html("<font color=red>请选择一个或者多个分类</font>");
			return false;
	  }else{
			$('#err_qx_fenlei').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	  //设备缺陷验证
	  if($('#qx_shebei').val()==''){
			$('#qx_shebei').focus();
			$('#err_qx_shebei').html("<font color=red>缺陷设备必须填写</font>");
			return false;
		}
	//验证缺陷描述
		if($('#qx_ms').val()==''){
			$('#qx_ms').focus();
			$('#err_qx_ms').html("<font color=red>设备描述必须填写</font>");
			return false;
		}
	});
	
	$('#qx_fxr').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_fxr').html("<font color=red>发现人必须填写</font>");
			return false;
		}else{
			$('#err_qx_fxr').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_shebei').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_shebei').html("<font color=red>缺陷设备必须填写</font>");
			return false;
		}else{
			$('#err_qx_shebei').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_ms').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_ms').html("<font color=red>设备描述必须填写</font>");
			return false;
		}else{
			$('#err_qx_ms').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_xq_qrr').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_xq_qrr').html("<font color=red>请填写[缺陷确认]确认人</font>");
			return false;
		}else{
			$('#err_qx_xq_qrr').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_yh_ms').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_yh_ms').html("<font color=red>请填写[延缓消缺]情况描述</font>");
			return false;
		}else{
			$('#err_qx_yh_ms').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_yh_qrr').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_yh_qrr').html("<font color=red>请填写[延缓消缺]确认人</font>");
			return false;
		}else{
			$('#err_qx_yh_qrr').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_yh_fcqr').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_yh_fcqr').html("<font color=red>请填写[延缓消缺]分场确认</font>");
			return false;
		}else{
			$('#err_qx_yh_fcqr').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_yj_xqjg').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_yj_xqjg').html("<font color=red>请填写[已经消缺]消缺结果</font>");
			return false;
		}else{
			$('#err_qx_yj_xqjg').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
	
	$('#qx_yj_qrr').blur(function(){
		if($(this).val()==''){
			$(this).focus();
			$('#err_qx_yj_qrr').html("<font color=red>请填写[已经消缺]确认人</font>");
			return false;
		}else{
			$('#err_qx_yj_qrr').html("<img src='../../admin/js/images/onCorrect.gif' />");
		}
	});
		
});