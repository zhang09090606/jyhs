$(function(){
	$("#pic1").click(function(){
		$(this).css("background","#E4E4E4");
		$(window).attr('location','index.html');
	});
	$("#pic2").click(function(){
		$(this).css("background","#E4E4E4");
		$(window).attr('location','case.php');
	});
	$("#pic3").click(function(){
		$(this).css("background","#E4E4E4");
		$(window).attr('location','jfshop.php');
	});
	$("#pic4").click(function(){
		$(this).css("background","#E4E4E4");
		$(window).attr('location','my.php');
	});
	$(".arrow").click(function(){
		$(this).css("background","#E4E4E4");	
	});
});


function cencel() {
		alert("抱歉回收员已经出发，取消订单请联系我们");
}
$("#d241").click(function(){
	if(confirm("确定要选择预约单么？预约单将可能会加长等待时间")){
		return true;
	}else{
		return false;
	}
		
});
function delete0() {
	if (confirm("您确定要删除订单么？")) {
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

