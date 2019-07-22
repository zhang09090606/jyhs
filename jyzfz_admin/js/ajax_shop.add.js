function ff() {
	var mid = $('#m_id').val();
	$.ajax({

		type: "POST",
		url: "shop_check.php",
		data: "mid=" + mid + "&action=ajax",
		dataType: "html",
		success: function (msg) {
			$('#price').attr("value", msg);
		}
	});

}
