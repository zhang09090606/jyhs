function delete0() {
	if (confirm("您确定要取消订单么？")) {
		$(function () {
			var id = this.activeElement.id;
			$.ajax({
				type: "post",
				async: false,
				url: "hs.order_check.php",
				data: {
					id: id,
					action: "delete"
				},
				dataType: "json",
				success: function (data) {
					window.location.reload();
				}
			});
		});
	}
}
function run() {
	$(function () {
	var id = this.activeElement.id;
	window.location.href="hs.run.php?id="+id;
	});
	}