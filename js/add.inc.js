$(function(){
	$(".main").click(function(){
		var id=$(this).find('input[id="add"]').val();
		$('#'+id) .submit();
	});
});