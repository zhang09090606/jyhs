


//初始化Uploadify
function GetUploadify(frame,title,type,desc,num,size,input)
{
	$("body").append('<iframe frameborder="0" id="'+ frame +'" src="../../jyzfz_admin/data/plugin/uploadify/index.php?title='+ encodeURI(title) +'&type='+ type +'&desc='+ encodeURI(desc) +'&num='+ num +'&size='+ size +'&frame='+ frame +'&input='+ input +'" allowtransparency="true" class="uploadframe" scrolling="no"></iframe>');

	$("#" + frame).css("height",$(document).height()).show();

	$(window).resize(function(){
		$("#" + frame).css("height",$(document).height()).show();
	});
}


//删除未提交input
function ClearPicArr(val)
{
	$("li[rel='"+ val +"']").remove();
	$.get(
		'../data/plugin/uploadify/uploadify.php',
		{action:"del", filename:val},
		function(){}
	);
}