$(function(){
	$("img.picture").mousedown(function(){
		$(this).css("background","#E4E4E4");
	});
	$("img.picture").click(function(){
		$(this).css("background","#FFFFFF");
		$(window).attr('location','order.php?class=1');
	});
	$("#water").click(function(){
			$(this).css("background","#FFFFFF");
		$(window).attr('location','order.php?class=2');
	});
	$("#clothes").click(function(){
		$(window).attr('location','order.php?class=3');
	});
	$("#metal").click(function(){
		$(window).attr('location','order.php?class=4');
	});
	$("#sofa").click(function(){
		$(window).attr('location','order.php?class=5');
	});
	$("#phone").click(function(){
		$(window).attr('location','order.php?class=6');
	});
	$("#television").click(function(){
		$(window).attr('location','order.php?class=7');
	});
	$("#other").click(function(){
		$(window).attr('location','other.php');
	});
	
	
});
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
});

