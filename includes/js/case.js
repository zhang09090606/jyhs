$(function(){
	$("#pic1").mousedown(function(){
		$(this).css("background","#E4E4E4");
	});
	$("#pic2").mousedown(function(){
		$(this).css("background","#E4E4E4");
	});
	$("#pic3").mousedown(function(){
		$(this).css("background","#E4E4E4");
	});
	$("#pic4").mousedown(function(){
		$(this).css("background","#E4E4E4");
	});
	$("#pic1").click(function(){
		$(this).css("background","#FFFFFF");
		$(window).attr('location','index.html');
	});
	$("#pic2").click(function(){
		$(this).css("background","#FFFFFF");
		$(window).attr('location','case.php');
	});
	$("#pic3").click(function(){
		$(this).css("background","#FFFFFF");
		$(window).attr('location','jfshop.php');
	});
	$("#pic4").click(function(){
		$(this).css("background","#FFFFFF");
		$(window).attr('location','my.php');
	});
	$(".Wdate").click(function(){
		alert("你确定要预约到达时间，预约到达时间可能会延长等待时间");			

	});
});


function cencel() {
	if (confirm("您确定要取消订单么？")) {
		$(function () {
			var id = this.activeElement.id;
			$.ajax({
				type: "post",
				async: false,
				url: "order_check.php",
				data: {
					id: id,
					action: "delete0"
				},
				dataType: "json",
				success: function (data) {
					window.location.reload();
				}
			});
		});
	}
}

function finish() {
	if (confirm("您确定已与回收员统一价格了？")) {
		$(function () {
			var id = this.activeElement.id;
			window.location.href = "order.money.php?id=" + id;
		}); 
	}
}

